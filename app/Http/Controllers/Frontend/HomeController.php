<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $newads = DB::table('products')->orderBy('created_at', 'desc')->take(15)->get();
        return view('frontend.index', compact('newads'));
    }

}
