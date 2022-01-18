<?php

namespace App\Domains\Auth\Http\Controllers\Frontend\Auth;

use App\Domains\Auth\Http\Requests\Frontend\Auth\UpdatePasswordRequest;
use App\Domains\Auth\Services\UserService;
use App\Http\Controllers\Controller;
use DB;

/**
 * Class PasswordExpiredController.
 */
class PasswordExpiredController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function expired()
    {
        abort_unless(config('boilerplate.access.user.password_expires_days'), 404);
        $expired = DB::table('announcements')->select('id','area','type','message','enabled')->where('area', 'frontend')->get();
        return view('frontend.auth.passwords.expired')->with('announcements', $expired);
    }

    /**
     * @param  UpdatePasswordRequest  $request
     * @param  UserService  $userService
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdatePasswordRequest $request, UserService $userService)
    {
        abort_unless(config('boilerplate.access.user.password_expires_days'), 404);

        $userService->updatePassword($request->user(), $request->only('old_password', 'password'), true);

        notify()->success('Password successfully updated.','Login');
        return redirect()->route('frontend.user.account');
    }
}
