<?php

namespace App\Http\Controllers;

use App\DataTables\PerizinanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePerizinanRequest;
use App\Http\Requests\UpdatePerizinanRequest;
use App\Repositories\PerizinanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PerizinanController extends AppBaseController
{
    /** @var  PerizinanRepository */
    private $perizinanRepository;

    public function __construct(PerizinanRepository $perizinanRepo)
    {
        $this->perizinanRepository = $perizinanRepo;
    }

    /**
     * Display a listing of the Perizinan.
     *
     * @param PerizinanDataTable $perizinanDataTable
     * @return Response
     */
    public function index(PerizinanDataTable $perizinanDataTable)
    {
        return $perizinanDataTable->render('perizinans.index');
    }

    /**
     * Show the form for creating a new Perizinan.
     *
     * @return Response
     */
    public function create()
    {
        return view('perizinans.create');
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

        $perizinan = $this->perizinanRepository->create($input);

        Flash::success('Perizinan saved successfully.');

        return redirect(route('perizinans.index'));
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

        if (empty($perizinan)) {
            Flash::error('Perizinan not found');

            return redirect(route('perizinans.index'));
        }
        return view('perizinans.edit')->with('perizinan', $perizinan);
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
        $perizinan = $this->perizinanRepository->find($id);

        if (empty($perizinan)) {
            Flash::error('Perizinan not found');

            return redirect(route('perizinans.index'));
        }

        $this->perizinanRepository->delete($id);

        Flash::success('Perizinan deleted successfully.');

        return redirect(route('perizinans.index'));
    }
}
