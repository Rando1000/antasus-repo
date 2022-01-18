<?php

namespace App\Http\Controllers;
use DB;
use App\Domains\Auth\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware(middleware: 'Auth');
//     }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $users = User::where('id', '!=', Auth::id())->take(9)->get();
        $this->data['users'] = $users;
        return view('frontend.chat.index', $this->data);
    }
}
