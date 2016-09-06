<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanetRequest;
use App\Http\Requests\UpdatePlanetRequest;
use App\Repositories\PlanetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanetController extends AppBaseController
{
    /** @var  PlanetRepository */
    private $planetRepository;

    public function __construct(PlanetRepository $planetRepo)
    {
        $this->planetRepository = $planetRepo;
    }

    /**
     * Display a listing of the Planet.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planetRepository->pushCriteria(new RequestCriteria($request));
        $planets = $this->planetRepository->all();

        return view('planets.index')
            ->with('planets', $planets);
    }

    /**
     * Show the form for creating a new Planet.
     *
     * @return Response
     */
    public function create()
    {
        return view('planets.create');
    }

    /**
     * Store a newly created Planet in storage.
     *
     * @param CreatePlanetRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanetRequest $request)
    {
        $input = $request->all();

        $planet = $this->planetRepository->create($input);

        Flash::success('Planet saved successfully.');

        return redirect(route('planets.index'));
    }

    /**
     * Display the specified Planet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planet = $this->planetRepository->findWithoutFail($id);

        if (empty($planet)) {
            Flash::error('Planet not found');

            return redirect(route('planets.index'));
        }

        return view('planets.show')->with('planet', $planet);
    }

    /**
     * Show the form for editing the specified Planet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planet = $this->planetRepository->findWithoutFail($id);

        if (empty($planet)) {
            Flash::error('Planet not found');

            return redirect(route('planets.index'));
        }

        return view('planets.edit')->with('planet', $planet);
    }

    /**
     * Update the specified Planet in storage.
     *
     * @param  int              $id
     * @param UpdatePlanetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanetRequest $request)
    {
        $planet = $this->planetRepository->findWithoutFail($id);

        if (empty($planet)) {
            Flash::error('Planet not found');

            return redirect(route('planets.index'));
        }

        $planet = $this->planetRepository->update($request->all(), $id);

        Flash::success('Planet updated successfully.');

        return redirect(route('planets.index'));
    }

    /**
     * Remove the specified Planet from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planet = $this->planetRepository->findWithoutFail($id);

        if (empty($planet)) {
            Flash::error('Planet not found');

            return redirect(route('planets.index'));
        }

        $this->planetRepository->delete($id);

        Flash::success('Planet deleted successfully.');

        return redirect(route('planets.index'));
    }
}
