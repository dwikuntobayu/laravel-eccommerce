<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSkyRequest;
use App\Http\Requests\UpdateSkyRequest;
use App\Repositories\SkyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SkyController extends AppBaseController
{
    /** @var  SkyRepository */
    private $skyRepository;

    public function __construct(SkyRepository $skyRepo)
    {
        $this->skyRepository = $skyRepo;
    }

    /**
     * Display a listing of the Sky.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->skyRepository->pushCriteria(new RequestCriteria($request));
        $skies = $this->skyRepository->all();

        return view('skies.index')
            ->with('skies', $skies);
    }

    /**
     * Show the form for creating a new Sky.
     *
     * @return Response
     */
    public function create()
    {
        return view('skies.create');
    }

    /**
     * Store a newly created Sky in storage.
     *
     * @param CreateSkyRequest $request
     *
     * @return Response
     */
    public function store(CreateSkyRequest $request)
    {
        $input = $request->all();

        $sky = $this->skyRepository->create($input);

        Flash::success('Sky saved successfully.');

        return redirect(route('skies.index'));
    }

    /**
     * Display the specified Sky.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sky = $this->skyRepository->findWithoutFail($id);

        if (empty($sky)) {
            Flash::error('Sky not found');

            return redirect(route('skies.index'));
        }

        return view('skies.show')->with('sky', $sky);
    }

    /**
     * Show the form for editing the specified Sky.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sky = $this->skyRepository->findWithoutFail($id);

        if (empty($sky)) {
            Flash::error('Sky not found');

            return redirect(route('skies.index'));
        }

        return view('skies.edit')->with('sky', $sky);
    }

    /**
     * Update the specified Sky in storage.
     *
     * @param  int              $id
     * @param UpdateSkyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkyRequest $request)
    {
        $sky = $this->skyRepository->findWithoutFail($id);

        if (empty($sky)) {
            Flash::error('Sky not found');

            return redirect(route('skies.index'));
        }

        $sky = $this->skyRepository->update($request->all(), $id);

        Flash::success('Sky updated successfully.');

        return redirect(route('skies.index'));
    }

    /**
     * Remove the specified Sky from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sky = $this->skyRepository->findWithoutFail($id);

        if (empty($sky)) {
            Flash::error('Sky not found');

            return redirect(route('skies.index'));
        }

        $this->skyRepository->delete($id);

        Flash::success('Sky deleted successfully.');

        return redirect(route('skies.index'));
    }
}
