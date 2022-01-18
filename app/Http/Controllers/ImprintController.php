<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ImprintController extends Controller
{
    public function index(){
        $imprint = DB::table('announcements')->select('id','area','type','message','enabled')->where('area', 'frontend')->get();
        return view('frontend.pages.imprint')->with('announcements', $imprint);
    }
}
