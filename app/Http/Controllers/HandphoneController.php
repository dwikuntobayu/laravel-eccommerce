<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHandphoneRequest;
use App\Http\Requests\UpdateHandphoneRequest;
use App\Repositories\HandphoneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HandphoneController extends AppBaseController
{
    /** @var  HandphoneRepository */
    private $handphoneRepository;

    public function __construct(HandphoneRepository $handphoneRepo)
    {
        $this->handphoneRepository = $handphoneRepo;
    }

    /**
     * Display a listing of the Handphone.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->handphoneRepository->pushCriteria(new RequestCriteria($request));
        $handphones = $this->handphoneRepository->all();

        return view('handphones.index')
            ->with('handphones', $handphones);
    }

    /**
     * Show the form for creating a new Handphone.
     *
     * @return Response
     */
    public function create()
    {
        return view('handphones.create');
    }

    /**
     * Store a newly created Handphone in storage.
     *
     * @param CreateHandphoneRequest $request
     *
     * @return Response
     */
    public function store(CreateHandphoneRequest $request)
    {
        $input = $request->all();

        $handphone = $this->handphoneRepository->create($input);

        Flash::success('Handphone saved successfully.');

        return redirect(route('handphones.index'));
    }

    /**
     * Display the specified Handphone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $handphone = $this->handphoneRepository->findWithoutFail($id);

        if (empty($handphone)) {
            Flash::error('Handphone not found');

            return redirect(route('handphones.index'));
        }

        return view('handphones.show')->with('handphone', $handphone);
    }

    /**
     * Show the form for editing the specified Handphone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $handphone = $this->handphoneRepository->findWithoutFail($id);

        if (empty($handphone)) {
            Flash::error('Handphone not found');

            return redirect(route('handphones.index'));
        }

        return view('handphones.edit')->with('handphone', $handphone);
    }

    /**
     * Update the specified Handphone in storage.
     *
     * @param  int              $id
     * @param UpdateHandphoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHandphoneRequest $request)
    {
        $handphone = $this->handphoneRepository->findWithoutFail($id);

        if (empty($handphone)) {
            Flash::error('Handphone not found');

            return redirect(route('handphones.index'));
        }

        $handphone = $this->handphoneRepository->update($request->all(), $id);

        Flash::success('Handphone updated successfully.');

        return redirect(route('handphones.index'));
    }

    /**
     * Remove the specified Handphone from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $handphone = $this->handphoneRepository->findWithoutFail($id);

        if (empty($handphone)) {
            Flash::error('Handphone not found');

            return redirect(route('handphones.index'));
        }

        $this->handphoneRepository->delete($id);

        Flash::success('Handphone deleted successfully.');

        return redirect(route('handphones.index'));
    }
}
