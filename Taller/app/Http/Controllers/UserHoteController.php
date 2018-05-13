<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserHoteRequest;
use App\Http\Requests\UpdateUserHoteRequest;
use App\Repositories\UserHoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserHoteController extends AppBaseController
{
    /** @var  UserHoteRepository */
    private $userHoteRepository;

    public function __construct(UserHoteRepository $userHoteRepo)
    {
        $this->userHoteRepository = $userHoteRepo;
    }

    /**
     * Display a listing of the UserHote.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userHoteRepository->pushCriteria(new RequestCriteria($request));
        $userHotes = $this->userHoteRepository->all();

        return view('user_hotes.index')
            ->with('userHotes', $userHotes);
    }

    /**
     * Show the form for creating a new UserHote.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_hotes.create');
    }

    /**
     * Store a newly created UserHote in storage.
     *
     * @param CreateUserHoteRequest $request
     *
     * @return Response
     */
    public function store(CreateUserHoteRequest $request)
    {
        $input = $request->all();

        $userHote = $this->userHoteRepository->create($input);

        Flash::success('User Hote saved successfully.');

        return redirect(route('userHotes.index'));
    }

    /**
     * Display the specified UserHote.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userHote = $this->userHoteRepository->findWithoutFail($id);

        if (empty($userHote)) {
            Flash::error('User Hote not found');

            return redirect(route('userHotes.index'));
        }

        return view('user_hotes.show')->with('userHote', $userHote);
    }

    /**
     * Show the form for editing the specified UserHote.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userHote = $this->userHoteRepository->findWithoutFail($id);

        if (empty($userHote)) {
            Flash::error('User Hote not found');

            return redirect(route('userHotes.index'));
        }

        return view('user_hotes.edit')->with('userHote', $userHote);
    }

    /**
     * Update the specified UserHote in storage.
     *
     * @param  int              $id
     * @param UpdateUserHoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserHoteRequest $request)
    {
        $userHote = $this->userHoteRepository->findWithoutFail($id);

        if (empty($userHote)) {
            Flash::error('User Hote not found');

            return redirect(route('userHotes.index'));
        }

        $userHote = $this->userHoteRepository->update($request->all(), $id);

        Flash::success('User Hote updated successfully.');

        return redirect(route('userHotes.index'));
    }

    /**
     * Remove the specified UserHote from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userHote = $this->userHoteRepository->findWithoutFail($id);

        if (empty($userHote)) {
            Flash::error('User Hote not found');

            return redirect(route('userHotes.index'));
        }

        $this->userHoteRepository->delete($id);

        Flash::success('User Hote deleted successfully.');

        return redirect(route('userHotes.index'));
    }
}
