<?php

namespace App\Http\Controllers;

use App\DataTables\prestasiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateprestasiRequest;
use App\Http\Requests\UpdateprestasiRequest;
use App\Repositories\BioSiswaRepository;
use App\Repositories\prestasiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\DB;

class prestasiController extends AppBaseController
{
    /** @var  prestasiRepository */
    private $prestasiRepository;
    private $bioSiswaRepository;
    
    public function __construct(prestasiRepository $prestasiRepo, BioSiswaRepository $bioSiswaRepository)
    {
        $this->prestasiRepository = $prestasiRepo;
        $this->bioSiswaRepository = $bioSiswaRepository;
    }

    /**
     * Display a listing of the prestasi.
     *
     * @param prestasiDataTable $prestasiDataTable
     * @return Response
     */
    public function index(prestasiDataTable $prestasiDataTable)
    {
        return $prestasiDataTable->render('prestasis.index');
    }

    /**
     * Show the form for creating a new prestasi.
     *
     * @return Response
     */
    public function create()
    {
        $bio_siswa = $this->bioSiswaRepository->pluck('nama_lengkap', 'no_induk');
        return view('prestasis.create', compact('bio_siswa'));
    }

    /**
     * Store a newly created prestasi in storage.
     *
     * @param CreateprestasiRequest $request
     *
     * @return Response
     */
    public function store(CreateprestasiRequest $request)
    {
        $input = $request->all();

        $prestasi = $this->prestasiRepository->create($input);

        Flash::success('Prestasi saved successfully.');

        return redirect(route('prestasis.index'));
    }

    /**
     * Display the specified prestasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prestasi = $this->prestasiRepository->find($id);

        if (empty($prestasi)) {
            Flash::error('Prestasi not found');

            return redirect(route('prestasis.index'));
        }

        return view('prestasis.show')->with('prestasi', $prestasi);
    }

    /**
     * Show the form for editing the specified prestasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prestasi = $this->prestasiRepository->find($id);

        if (empty($prestasi)) {
            Flash::error('Prestasi not found');

            return redirect(route('prestasis.index'));
        }

        return view('prestasis.edit')->with('prestasi', $prestasi);
    }

    /**
     * Update the specified prestasi in storage.
     *
     * @param  int              $id
     * @param UpdateprestasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprestasiRequest $request)
    {
        $prestasi = $this->prestasiRepository->find($id);

        if (empty($prestasi)) {
            Flash::error('Prestasi not found');

            return redirect(route('prestasis.index'));
        }

        $prestasi = $this->prestasiRepository->update($request->all(), $id);

        Flash::success('Prestasi updated successfully.');

        return redirect(route('prestasis.index'));
    }

    /**
     * Remove the specified prestasi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prestasi = $this->prestasiRepository->find($id);

        if (empty($prestasi)) {
            Flash::error('Prestasi not found');

            return redirect(route('prestasis.index'));
        }

        $this->prestasiRepository->delete($id);

        Flash::success('Prestasi deleted successfully.');

        return redirect(route('prestasis.index'));
    }
}
