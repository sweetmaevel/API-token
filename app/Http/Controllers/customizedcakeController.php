<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecustomizedcakeRequest;
use App\Http\Requests\UpdatecustomizedcakeRequest;
use App\Repositories\customizedcakeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class customizedcakeController extends AppBaseController
{
    /** @var  customizedcakeRepository */
    private $customizedcakeRepository;

    public function __construct(customizedcakeRepository $customizedcakeRepo)
    {
        $this->customizedcakeRepository = $customizedcakeRepo;
    }

    /**
     * Display a listing of the customizedcake.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $customizedcakes = $this->customizedcakeRepository->all();

        return view('customizedcakes.index')
            ->with('customizedcakes', $customizedcakes);
    }

    /**
     * Show the form for creating a new customizedcake.
     *
     * @return Response
     */
    public function create()
    {
        return view('customizedcakes.create');
    }

    /**
     * Store a newly created customizedcake in storage.
     *
     * @param CreatecustomizedcakeRequest $request
     *
     * @return Response
     */
    public function store(CreatecustomizedcakeRequest $request)
    {
        $input = $request->all();

        $customizedcake = $this->customizedcakeRepository->create($input);

        Flash::success('Customizedcake saved successfully.');

        return redirect(route('customizedcakes.index'));
    }

    /**
     * Display the specified customizedcake.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customizedcake = $this->customizedcakeRepository->find($id);

        if (empty($customizedcake)) {
            Flash::error('Customizedcake not found');

            return redirect(route('customizedcakes.index'));
        }

        return view('customizedcakes.show')->with('customizedcake', $customizedcake);
    }

    /**
     * Show the form for editing the specified customizedcake.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customizedcake = $this->customizedcakeRepository->find($id);

        if (empty($customizedcake)) {
            Flash::error('Customizedcake not found');

            return redirect(route('customizedcakes.index'));
        }

        return view('customizedcakes.edit')->with('customizedcake', $customizedcake);
    }

    /**
     * Update the specified customizedcake in storage.
     *
     * @param int $id
     * @param UpdatecustomizedcakeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecustomizedcakeRequest $request)
    {
        $customizedcake = $this->customizedcakeRepository->find($id);

        if (empty($customizedcake)) {
            Flash::error('Customizedcake not found');

            return redirect(route('customizedcakes.index'));
        }

        $customizedcake = $this->customizedcakeRepository->update($request->all(), $id);

        Flash::success('Customizedcake updated successfully.');

        return redirect(route('customizedcakes.index'));
    }

    /**
     * Remove the specified customizedcake from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customizedcake = $this->customizedcakeRepository->find($id);

        if (empty($customizedcake)) {
            Flash::error('Customizedcake not found');

            return redirect(route('customizedcakes.index'));
        }

        $this->customizedcakeRepository->delete($id);

        Flash::success('Customizedcake deleted successfully.');

        return redirect(route('customizedcakes.index'));
    }
}
