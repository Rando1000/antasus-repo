<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;

/**
 * Class LocaleController.
 */
class LocaleController extends Controller
{
    /**
     * @param $locale
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change($locale)
    {
        app()->setLocale($locale);

        session()->put('locale', $locale);

        // $Success = Toastr::success('Language Change to ' .$locale, 'LANGUAGE-SYSTEM');

        // return redirect()->back()->with($Success);
        return redirect()->back();
    }
}
