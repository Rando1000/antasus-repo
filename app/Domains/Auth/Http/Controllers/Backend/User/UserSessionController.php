<?php

namespace App\Domains\Auth\Http\Controllers\Backend\User;

use App\Domains\Auth\Http\Requests\Backend\User\ClearUserSessionRequest;
use App\Domains\Auth\Models\User;
use App\Http\Controllers\Controller;


/**
 * Class UserSessionController.
 */
class UserSessionController extends Controller
{
    /**
     * @param  ClearUserSessionRequest  $request
     * @param  User  $user
     *
     * @return mixed
     */
    public function update(ClearUserSessionRequest $request, User $user)
    {
        $user->update(['to_be_logged_out' => true]);

        notify()->success('User Session Cleared');
        return redirect()->back();
    }
}
