<?php

namespace App\Http\Controllers;

use App\DataTables\PelanggaranDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePelanggaranRequest;
use App\Http\Requests\UpdatePelanggaranRequest;
use App\Repositories\PelanggaranRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PelanggaranController extends AppBaseController
{
    /** @var  PelanggaranRepository */
    private $pelanggaranRepository;

    public function __construct(PelanggaranRepository $pelanggaranRepo)
    {
        $this->pelanggaranRepository = $pelanggaranRepo;
    }

    /**
     * Display a listing of the Pelanggaran.
     *
     * @param PelanggaranDataTable $pelanggaranDataTable
     * @return Response
     */
    public function index(PelanggaranDataTable $pelanggaranDataTable)
    {
        return $pelanggaranDataTable->render('pelanggarans.index');
    }

    /**
     * Show the form for creating a new Pelanggaran.
     *
     * @return Response
     */
    public function create()
    {
        return view('pelanggarans.create');
    }

    /**
     * Store a newly created Pelanggaran in storage.
     *
     * @param CreatePelanggaranRequest $request
     *
     * @return Response
     */
    public function store(CreatePelanggaranRequest $request)
    {
        $input = $request->all();

        $pelanggaran = $this->pelanggaranRepository->create($input);

        Flash::success('Pelanggaran saved successfully.');

        return redirect(route('pelanggarans.index'));
    }

    /**
     * Display the specified Pelanggaran.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pelanggaran = $this->pelanggaranRepository->find($id);

        if (empty($pelanggaran)) {
            Flash::error('Pelanggaran not found');

            return redirect(route('pelanggarans.index'));
        }

        return view('pelanggarans.show')->with('pelanggaran', $pelanggaran);
    }

    /**
     * Show the form for editing the specified Pelanggaran.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pelanggaran = $this->pelanggaranRepository->find($id);

        if (empty($pelanggaran)) {
            Flash::error('Pelanggaran not found');

            return redirect(route('pelanggarans.index'));
        }

        return view('pelanggarans.edit')->with('pelanggaran', $pelanggaran);
    }

    /**
     * Update the specified Pelanggaran in storage.
     *
     * @param  int              $id
     * @param UpdatePelanggaranRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePelanggaranRequest $request)
    {
        $pelanggaran = $this->pelanggaranRepository->find($id);

        if (empty($pelanggaran)) {
            Flash::error('Pelanggaran not found');

            return redirect(route('pelanggarans.index'));
        }

        $pelanggaran = $this->pelanggaranRepository->update($request->all(), $id);

        Flash::success('Pelanggaran updated successfully.');

        return redirect(route('pelanggarans.index'));
    }

    /**
     * Remove the specified Pelanggaran from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pelanggaran = $this->pelanggaranRepository->find($id);

        if (empty($pelanggaran)) {
            Flash::error('Pelanggaran not found');

            return redirect(route('pelanggarans.index'));
        }

        $this->pelanggaranRepository->delete($id);

        Flash::success('Pelanggaran deleted successfully.');

        return redirect(route('pelanggarans.index'));
    }
}
