<?php

namespace App\Http\Controllers;

use App\Domains\Auth\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cache;
use DB;



class UserController extends Controller
{

    /**
     * Show user online status.
     */
    public function userOnlineStatus()
    {
        $users = User::all();

        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo $user->name . " is online. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
            else
                echo $user->name . " is offline. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
        }
    }
}