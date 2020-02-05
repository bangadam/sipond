<?php

namespace App\Http\Controllers;

use App\DataTables\JenisProdukBayarDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJenisProdukBayarRequest;
use App\Http\Requests\UpdateJenisProdukBayarRequest;
use App\Repositories\JenisProdukBayarRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JenisProdukBayarController extends AppBaseController
{
    /** @var  JenisProdukBayarRepository */
    private $jenisProdukBayarRepository;

    public function __construct(JenisProdukBayarRepository $jenisProdukBayarRepo)
    {
        $this->jenisProdukBayarRepository = $jenisProdukBayarRepo;
    }

    /**
     * Display a listing of the JenisProdukBayar.
     *
     * @param JenisProdukBayarDataTable $jenisProdukBayarDataTable
     * @return Response
     */
    public function index(JenisProdukBayarDataTable $jenisProdukBayarDataTable)
    {
        return $jenisProdukBayarDataTable->render('jenis_produk_bayars.index');
    }

    /**
     * Show the form for creating a new JenisProdukBayar.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_produk_bayars.create');
    }

    /**
     * Store a newly created JenisProdukBayar in storage.
     *
     * @param CreateJenisProdukBayarRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisProdukBayarRequest $request)
    {
        $input = $request->all();

        $jenisProdukBayar = $this->jenisProdukBayarRepository->create($input);

        Flash::success('Jenis Produk Bayar saved successfully.');

        return redirect(route('jenisProdukBayars.index'));
    }

    /**
     * Display the specified JenisProdukBayar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisProdukBayar = $this->jenisProdukBayarRepository->find($id);

        if (empty($jenisProdukBayar)) {
            Flash::error('Jenis Produk Bayar not found');

            return redirect(route('jenisProdukBayars.index'));
        }

        return view('jenis_produk_bayars.show')->with('jenisProdukBayar', $jenisProdukBayar);
    }

    /**
     * Show the form for editing the specified JenisProdukBayar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisProdukBayar = $this->jenisProdukBayarRepository->find($id);

        if (empty($jenisProdukBayar)) {
            Flash::error('Jenis Produk Bayar not found');

            return redirect(route('jenisProdukBayars.index'));
        }

        return view('jenis_produk_bayars.edit')->with('jenisProdukBayar', $jenisProdukBayar);
    }

    /**
     * Update the specified JenisProdukBayar in storage.
     *
     * @param  int              $id
     * @param UpdateJenisProdukBayarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisProdukBayarRequest $request)
    {
        $jenisProdukBayar = $this->jenisProdukBayarRepository->find($id);

        if (empty($jenisProdukBayar)) {
            Flash::error('Jenis Produk Bayar not found');

            return redirect(route('jenisProdukBayars.index'));
        }

        $jenisProdukBayar = $this->jenisProdukBayarRepository->update($request->all(), $id);

        Flash::success('Jenis Produk Bayar updated successfully.');

        return redirect(route('jenisProdukBayars.index'));
    }

    /**
     * Remove the specified JenisProdukBayar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisProdukBayar = $this->jenisProdukBayarRepository->find($id);

        if (empty($jenisProdukBayar)) {
            Flash::error('Jenis Produk Bayar not found');

            return redirect(route('jenisProdukBayars.index'));
        }

        $this->jenisProdukBayarRepository->delete($id);

        Flash::success('Jenis Produk Bayar deleted successfully.');

        return redirect(route('jenisProdukBayars.index'));
    }
}
