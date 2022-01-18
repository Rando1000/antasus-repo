<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Domains\Auth\Models\User;

use function React\Promise\all;

class PageController extends Controller
{
        /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function help(){
        return view('frontend.pages.help');
    }
    public function privacy(){
        return view('frontend.pages.privacy');
    }
    public function terms(){
        return view('frontend.pages.terms');
    }
    public function team(){
        $new = DB::table('users')->where('team', 'yes')->get();
        return view('frontend.pages.team',['team'=>$new]);
    }
    public function faq(){
        $hilfe = DB::select('select * from hilfe');
        return view('frontend.pages.faq',['hilfe'=>$hilfe]);
    }
    public function test(){
        return view('frontend.test');
    }
    public function tracking(){
        return view('frontend.pages.tracking');
    }
    public function docs(){
        return view('frontend.pages.documentation');
    }

    


}
