<?php

namespace App\Http\Controllers\Backend;
use DB;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $count = DB::select('select count(*) as total from users');
        $count1 = DB::select('select count(*) as total from announcements');
        return view('backend.dashboard', ['count' => $count[0]->total,'count1' => $count1[0]->total]); 


    }

}
