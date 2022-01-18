<?php

namespace App\Domains\Auth\Http\Controllers\Frontend\Auth;

use App\Domains\Auth\Http\Requests\Frontend\Auth\DisableTwoFactorAuthenticationRequest;
use App\Http\Controllers\Controller;
use DB;


/**
 * Class DisableTwoFactorAuthenticationController.
 */
class DisableTwoFactorAuthenticationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $disable = DB::table('announcements')->select('id','area','type','message','enabled')->where('area', 'frontend')->get();
        return view('frontend.user.account.tabs.two-factor-authentication.disable')->with('announcements', $disable);
    }

    /**
     * @param  DisableTwoFactorAuthenticationRequest  $request
     *
     * @return mixed
     */
    public function destroy(DisableTwoFactorAuthenticationRequest $request)
    {
        $request->user()->disableTwoFactorAuth();
        notify()->error('Two Factor Authentication Successfully Disabled.');
        return redirect()->route('frontend.user.account', ['#two-factor-authentication']);
    }
}
