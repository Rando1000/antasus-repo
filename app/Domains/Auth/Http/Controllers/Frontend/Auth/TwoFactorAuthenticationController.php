<?php

namespace App\Domains\Auth\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


/**
 * Class TwoFactorAuthenticationController.
 */
class TwoFactorAuthenticationController extends Controller
{
    /**
     * @param  Request  $request
     *
     * @return mixed
     */
    public function create(Request $request)
    {
        $secret = $request->user()->createTwoFactorAuth();

        return view('frontend.user.account.tabs.two-factor-authentication.enable')
            ->withQrCode($secret->toQr())
            ->withSecret($secret->toString());
    }

    /**
     * @param  Request  $request
     *
     * @return mixed
     */
    public function show(Request $request)
    {
        $twofactor = DB::table('announcements')->select('id','area','type','message','enabled')->where('area', 'frontend')->get();
        return view('frontend.user.account.tabs.two-factor-authentication.recovery')->with('announcements', $twofactor)
            ->withRecoveryCodes($request->user()->getRecoveryCodes());
    }

    /**
     * @param  Request  $request
     *
     * @return mixed
     */
    public function update(Request $request)
    {
        $request->user()->generateRecoveryCodes();

        session()->flash('flash_warning', __('Any old backup codes have been invalidated.'));
        notify()->success('Two Factor Recovery Codes Regenerated.','Login');
        return redirect()->route('frontend.auth.account.2fa.show');
    }
}
