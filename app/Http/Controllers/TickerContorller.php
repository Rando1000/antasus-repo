<?php

namespace App\Http\Controllers;

use App\Category;

use DB;
use App\Domains\Auth\Models\User;
use App\Http\Controllers\Controller;
use App\product;
use Illuminate\Http\Request;



class TickerContorller extends Controller
{
       
    public function newads()
    {
        $newads = DB::table('products')->orderBy('start_date', 'desc')->take(4)->get();
        return view('frontend.market.helper.ticker', compact('newads'));

    }
}


