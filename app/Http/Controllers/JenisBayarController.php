<?php

namespace App\Http\Controllers;

use App\DataTables\JenisBayarDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJenisBayarRequest;
use App\Http\Requests\UpdateJenisBayarRequest;
use App\Repositories\JenisBayarRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JenisBayarController extends AppBaseController
{
    /** @var  JenisBayarRepository */
    private $jenisBayarRepository;

    public function __construct(JenisBayarRepository $jenisBayarRepo)
    {
        $this->jenisBayarRepository = $jenisBayarRepo;
    }

    /**
     * Display a listing of the JenisBayar.
     *
     * @param JenisBayarDataTable $jenisBayarDataTable
     * @return Response
     */
    public function index(JenisBayarDataTable $jenisBayarDataTable)
    {
        return $jenisBayarDataTable->render('jenis_bayars.index');
    }

    /**
     * Show the form for creating a new JenisBayar.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_bayars.create');
    }

    /**
     * Store a newly created JenisBayar in storage.
     *
     * @param CreateJenisBayarRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisBayarRequest $request)
    {
        $input = $request->all();

        $jenisBayar = $this->jenisBayarRepository->create($input);

        Flash::success('Jenis Bayar saved successfully.');

        return redirect(route('jenisBayars.index'));
    }

    /**
     * Display the specified JenisBayar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisBayar = $this->jenisBayarRepository->find($id);

        if (empty($jenisBayar)) {
            Flash::error('Jenis Bayar not found');

            return redirect(route('jenisBayars.index'));
        }

        return view('jenis_bayars.show')->with('jenisBayar', $jenisBayar);
    }

    /**
     * Show the form for editing the specified JenisBayar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisBayar = $this->jenisBayarRepository->find($id);

        if (empty($jenisBayar)) {
            Flash::error('Jenis Bayar not found');

            return redirect(route('jenisBayars.index'));
        }

        return view('jenis_bayars.edit')->with('jenisBayar', $jenisBayar);
    }

    /**
     * Update the specified JenisBayar in storage.
     *
     * @param  int              $id
     * @param UpdateJenisBayarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisBayarRequest $request)
    {
        $jenisBayar = $this->jenisBayarRepository->find($id);

        if (empty($jenisBayar)) {
            Flash::error('Jenis Bayar not found');

            return redirect(route('jenisBayars.index'));
        }

        $jenisBayar = $this->jenisBayarRepository->update($request->all(), $id);

        Flash::success('Jenis Bayar updated successfully.');

        return redirect(route('jenisBayars.index'));
    }

    /**
     * Remove the specified JenisBayar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisBayar = $this->jenisBayarRepository->find($id);

        if (empty($jenisBayar)) {
            Flash::error('Jenis Bayar not found');

            return redirect(route('jenisBayars.index'));
        }

        $this->jenisBayarRepository->delete($id);

        Flash::success('Jenis Bayar deleted successfully.');

        return redirect(route('jenisBayars.index'));
    }
}
