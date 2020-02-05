<?php

namespace App\Http\Controllers;

use App\DataTables\JenisPrestasiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJenisPrestasiRequest;
use App\Http\Requests\UpdateJenisPrestasiRequest;
use App\Repositories\JenisPrestasiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JenisPrestasiController extends AppBaseController
{
    /** @var  JenisPrestasiRepository */
    private $jenisPrestasiRepository;

    public function __construct(JenisPrestasiRepository $jenisPrestasiRepo)
    {
        $this->jenisPrestasiRepository = $jenisPrestasiRepo;
    }

    /**
     * Display a listing of the JenisPrestasi.
     *
     * @param JenisPrestasiDataTable $jenisPrestasiDataTable
     * @return Response
     */
    public function index(JenisPrestasiDataTable $jenisPrestasiDataTable)
    {
        return $jenisPrestasiDataTable->render('jenis_prestasis.index');
    }

    /**
     * Show the form for creating a new JenisPrestasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_prestasis.create');
    }

    /**
     * Store a newly created JenisPrestasi in storage.
     *
     * @param CreateJenisPrestasiRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisPrestasiRequest $request)
    {
        $input = $request->all();

        $jenisPrestasi = $this->jenisPrestasiRepository->create($input);

        Flash::success('Jenis Prestasi saved successfully.');

        return redirect(route('jenisPrestasis.index'));
    }

    /**
     * Display the specified JenisPrestasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisPrestasi = $this->jenisPrestasiRepository->find($id);

        if (empty($jenisPrestasi)) {
            Flash::error('Jenis Prestasi not found');

            return redirect(route('jenisPrestasis.index'));
        }

        return view('jenis_prestasis.show')->with('jenisPrestasi', $jenisPrestasi);
    }

    /**
     * Show the form for editing the specified JenisPrestasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisPrestasi = $this->jenisPrestasiRepository->find($id);

        if (empty($jenisPrestasi)) {
            Flash::error('Jenis Prestasi not found');

            return redirect(route('jenisPrestasis.index'));
        }

        return view('jenis_prestasis.edit')->with('jenisPrestasi', $jenisPrestasi);
    }

    /**
     * Update the specified JenisPrestasi in storage.
     *
     * @param  int              $id
     * @param UpdateJenisPrestasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisPrestasiRequest $request)
    {
        $jenisPrestasi = $this->jenisPrestasiRepository->find($id);

        if (empty($jenisPrestasi)) {
            Flash::error('Jenis Prestasi not found');

            return redirect(route('jenisPrestasis.index'));
        }

        $jenisPrestasi = $this->jenisPrestasiRepository->update($request->all(), $id);

        Flash::success('Jenis Prestasi updated successfully.');

        return redirect(route('jenisPrestasis.index'));
    }

    /**
     * Remove the specified JenisPrestasi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisPrestasi = $this->jenisPrestasiRepository->find($id);

        if (empty($jenisPrestasi)) {
            Flash::error('Jenis Prestasi not found');

            return redirect(route('jenisPrestasis.index'));
        }

        $this->jenisPrestasiRepository->delete($id);

        Flash::success('Jenis Prestasi deleted successfully.');

        return redirect(route('jenisPrestasis.index'));
    }
}
