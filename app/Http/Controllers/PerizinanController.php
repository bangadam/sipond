<?php

namespace App\Http\Controllers;

use App\DataTables\PerizinanDataTable;
use App\Http\Requests\CreatePerizinanRequest;
use App\Http\Requests\UpdatePerizinanRequest;
use App\Repositories\BioSiswaRepository;
use App\Repositories\PerizinanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Perizinan;
use App\Models\PerizinanKembali;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;

class PerizinanController extends AppBaseController
{
    /** @var  PerizinanRepository */
    private $perizinanRepository;
    private $bioSiswaRepository;

    public function __construct(PerizinanRepository $perizinanRepo, BioSiswaRepository $bioSiswaRepository)
    {
        $this->perizinanRepository = $perizinanRepo;
        $this->bioSiswaRepository = $bioSiswaRepository;
    }

    /**
     * Display a listing of the Perizinan.
     *
     * @param PerizinanDataTable $perizinanDataTable
     * @return Response
     */
    public function index(PerizinanDataTable $perizinanDataTable)
    {
        $perizinan = Perizinan::with(['bio_siswa', 'perizinanKembali'])->get()->toArray();
        return view('perizinans.index', compact('perizinan'));
    }

    /**
     * Show the form for creating a new Perizinan.
     *
     * @return Response
     */
    public function create()
    {
        $bio_siswa = $this->bioSiswaRepository->pluck('nama_lengkap', 'no_induk');
        return view('perizinans.create', compact('bio_siswa'));
    }

    /**
     * Store a newly created Perizinan in storage.
     *
     * @param CreatePerizinanRequest $request
     *
     * @return Response
     */
    public function store(CreatePerizinanRequest $request)
    {
        $input = $request->all();
        $dateA = $request->tgl_izin;
        $dateB = $request->tgl_kembali;

        $dateTimestamp1 = strtotime($dateA);
        $dateTimestamp2 = strtotime($dateB);
        if ($dateTimestamp1 <= $dateTimestamp2) {

            $perizinan = $this->perizinanRepository->create($input);

            Flash::success('Perizinan saved successfully.');

            return redirect(route('perizinans.index'));
        } else {

            Flash::warning('Date invalid.');
            return redirect(route('perizinans.index'));
        }
    }

    /**
     * Display the specified Perizinan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perizinan = $this->perizinanRepository->find($id);

        if (empty($perizinan)) {
            Flash::error('Perizinan not found');

            return redirect(route('perizinans.index'));
        }

        return view('perizinans.show')->with('perizinan', $perizinan);
    }

    /**
     * Show the form for editing the specified Perizinan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perizinan = $this->perizinanRepository->find($id);
        $bio_siswa = $this->bioSiswaRepository->pluck('nama_lengkap', 'no_induk');
        if (empty($perizinan)) {
            Flash::error('Perizinan not found');

            return redirect(route('perizinans.index'));
        }
        return view('perizinans.edit')->with(['perizinan' => $perizinan, 'bio_siswa' => $bio_siswa]);
    }

    public function konfirmasi(Request $request)
    {
        try {
            DB::beginTransaction();

            $perizinan = $this->perizinanRepository->find($request->id_izin);
            if ($perizinan) {
                DB::table('perizinan')->where('id_izin', $request->id_izin)->update([
                    'status_izin' => 'Kembali'
                ]);
            }

            // Add data kembali in table perizinan kembali
            PerizinanKembali::create([
                'id_izin' => $perizinan->id_izin,
                'no_induk' => $perizinan->no_induk,
                'tgl_kembali' => $request->tanggal_kembali,
                'status_kembali' => $request->status_kembali
            ]);

            DB::commit();

            Flash::success('Santri telah kembali.');
            return redirect(route('perizinans.index'));
        } catch (\Exception $th) {
            DB::rollBack();
            Flash::success('Gagal konfirmasi');
            return redirect(route('perizinans.index'));
        }
    }

    /**
     * Update the specified Perizinan in storage.
     *
     * @param  int              $id
     * @param UpdatePerizinanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerizinanRequest $request)
    {
        $perizinan = $this->perizinanRepository->find($id);

        if (empty($perizinan)) {
            Flash::error('Perizinan not found');

            return redirect(route('perizinans.index'));
        }

        $perizinan = $this->perizinanRepository->update($request->all(), $id);

        Flash::success('Perizinan updated successfully.');

        return redirect(route('perizinans.index'));
    }

    /**
     * Remove the specified Perizinan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perizinan = $this->perizinanRepository->with(['perizinanKembali'])->find($id);


        if (empty($perizinan)) {
            Flash::error('Perizinan not found');

            return redirect(route('perizinans.index'));
        }
        $perizinan->perizinanKembali()->delete();
        $this->perizinanRepository->delete($id);

        Flash::success('Perizinan deleted successfully.');

        return redirect(route('perizinans.index'));
    }

    public function konfirmasiBatal($id)
    {
        try {
            DB::beginTransaction();

            $perizinan = Perizinan::with('perizinanKembali')->find($id);
            $perizinan->update(['status_izin' => 'Belum Kembali']);

            $perizinan->perizinanKembali()->delete();

            DB::commit();

            Flash::success('Data berhasil di update');
            return redirect(route('perizinans.index'));
        } catch (\Exception $th) {
            DB::rollback();
            Flash::success('proses gagal');
            return redirect(route('perizinans.index'));
        }
    }
}
