<?php

namespace App\Http\Controllers;

use App\DataTables\PelanggaranDetailDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePelanggaranDetailRequest;
use App\Http\Requests\UpdatePelanggaranDetailRequest;
use App\Models\Pelanggaran;
use App\Repositories\BioSiswaRepository;
use App\Repositories\PelanggaranDetailRepository;
use App\Repositories\PelanggaranRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Repositories\tindakanRepository;
use Illuminate\Support\Facades\DB;
use Response;

class PelanggaranDetailController extends AppBaseController
{
    /** @var  PelanggaranDetailRepository */
    private $pelanggaranDetailRepository;
    private $pelanggaranRepository;
    private $bioSiswaRepository;
    private $tindakanRepository;

    public function __construct(PelanggaranDetailRepository $pelanggaranDetailRepo, BioSiswaRepository $bioSiswaRepository, PelanggaranRepository $pelanggaranRepository, tindakanRepository $tindakanRepository)
    {
        $this->pelanggaranDetailRepository = $pelanggaranDetailRepo;
        $this->pelanggaranRepository = $pelanggaranRepository;
        $this->bioSiswaRepository = $bioSiswaRepository;
        $this->tindakanRepository = $tindakanRepository;
    }

    /**
     * Display a listing of the PelanggaranDetail.
     *
     * @param PelanggaranDetailDataTable $pelanggaranDetailDataTable
     * @return Response
     */
    public function index(PelanggaranDetailDataTable $pelanggaranDetailDataTable)
    {
        return $pelanggaranDetailDataTable->render('pelanggaran_details.index');
    }

    /**
     * Show the form for creating a new PelanggaranDetail.
     *
     * @return Response
     */
    public function create()
    {
        $bio_siswa = $this->bioSiswaRepository->pluck('nama_lengkap', 'no_induk');
        $tindakan = $this->tindakanRepository->pluck('nama_tindakan', 'id');
        return view('pelanggaran_details.create', compact('bio_siswa', 'tindakan'));
    }

    /**
     * Store a newly created PelanggaranDetail in storage.
     *
     * @param CreatePelanggaranDetailRequest $request
     *
     * @return Response
     */
    public function store(CreatePelanggaranDetailRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->all();
            $checkIfExist = $this->pelanggaranRepository->where('no_induk', $request->no_induk)->first();
            if ($checkIfExist) {
                // update and create pelanggaran detail

                // tambah skor
                $totalScore = $checkIfExist->skor + $request->poin;
                $checkIfExist->update([
                    'skor' => $totalScore,
                ]);

                $input['id_pelanggaran'] = $checkIfExist->id_pelanggaran;
                $this->pelanggaranDetailRepository->create($input);
            } else {
                $pelanggaran = $this->pelanggaranRepository->create([
                    'no_induk' => $request->no_induk,
                    'keterangan' => '',
                    'skor' => $request->poin,
                ]);

                $input['id_pelanggaran'] = $pelanggaran->id_pelanggaran;
                $this->pelanggaranDetailRepository->create($input);
            }

            Flash::success('Pelanggaran Detail saved successfully.');

            DB::commit();

            return redirect(route('pelanggaran.index'));
        } catch (Exception $e) {
            DB::rollBack();
            Flash::error('Data gagal disimpan');
            return redirect(route('pelanggaran.index'));
        }
    }

    /**
     * Display the specified PelanggaranDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pelanggaranDetail = $this->pelanggaranDetailRepository->with(['pelanggaran', 'bio_siswa', 'tindakan'])->find($id);

        if (empty($pelanggaranDetail)) {
            Flash::error('Pelanggaran Detail not found');

            return redirect(route('pelanggaran.index'));
        }

        return view('pelanggaran_details.show')->with('pelanggaranDetail', $pelanggaranDetail);
    }

    /**
     * Show the form for editing the specified PelanggaranDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pelanggaranDetail = $this->pelanggaranRepository->with(['bio_siswa', 'pelanggaranDetail.tindakan'])->find($id);
        $tindakan = $this->tindakanRepository->select(['nama_tindakan', 'id']);
        if (empty($pelanggaranDetail)) {
            Flash::error('Pelanggaran Detail not found');

            return redirect(route('pelanggaran.index'));
        }

        return view('pelanggaran_details.edit')->with(['pelanggaranDetail' => $pelanggaranDetail, 'tindakan' => $tindakan]);
    }

    /**
     * Update the specified PelanggaranDetail in storage.
     *
     * @param int $id
     * @param UpdatePelanggaranDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePelanggaranDetailRequest $request)
    {
        try {
            DB::beginTransaction();

            $pelanggaranDetail = $this->pelanggaranDetailRepository->find($id);


            if (empty($pelanggaranDetail)) {
                Flash::error('Pelanggaran Detail not found');

                return redirect(route('pelanggaran.index'));
            }
            // Update pelanggaran
            $pelanggaranDetail->pelanggaran->keterangan = $request->pelanggaran['keterangan'];
            $pelanggaranDetail->pelanggaran->skor = $request->pelanggaran['skor'];
            $pelanggaranDetail->push();

            // update pelanggaran detail
            $this->pelanggaranDetailRepository->update($request->all(), $id);

            Flash::success('Pelanggaran Detail updated successfully.');
            DB::commit();

            return redirect(route('pelanggaran.index'));
        } catch (Exception $e) {
            DB::rollBack();
            Flash::danger('Pelanggaran Detail gagal di update');
            return redirect(route('pelanggaran.index'));
        }
    }

    /**
     * Remove the specified PelanggaranDetail from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pelanggaranDetail = $this->pelanggaranDetailRepository->find($id);

        if (empty($pelanggaranDetail)) {
            Flash::error('Pelanggaran Detail not found');

            return redirect(route('pelanggaran.index'));
        }

        $this->pelanggaranDetailRepository->delete($id);
        $pelanggaranDetail->pelanggaran()->delete();

        Flash::success('Pelanggaran Detail deleted successfully.');

        return redirect(route('pelanggaran.index'));
    }
}
