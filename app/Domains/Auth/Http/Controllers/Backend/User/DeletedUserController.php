<?php

namespace App\Domains\Auth\Http\Controllers\Backend\User;

use App\Domains\Auth\Models\User;
use App\Domains\Auth\Services\UserService;
use App\Http\Controllers\Controller;


/**
 * Class DeletedUserController.
 */
class DeletedUserController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * DeletedUserController constructor.
     *
     * @param  UserService  $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.auth.user.deleted');
    }

    /**
     * @param  User  $deletedUser
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(User $deletedUser)

    {
        $this->userService->restore($deletedUser);

        notify()->success('User Restored');
        return redirect()->route('admin.auth.user.index');
    }

    /**
     * @param  User  $deletedUser
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(User $deletedUser)
    {
        abort_unless(config('boilerplate.access.user.permanently_delete'), 404);

        $this->userService->destroy($deletedUser);
        notify()->error('User Deleted');
        return redirect()->route('admin.auth.user.deleted');
    }
}
