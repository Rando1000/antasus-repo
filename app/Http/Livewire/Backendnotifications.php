<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Domains\Announcement\Models\Announcement;
use DB;

class Backendnotifications extends Component
{


    public function render()
    {
        $announcements = DB::table('announcements')->select('id','area','type','message','enabled')->where('area', 'backend')->get();
        return view('livewire.notifications',['announcements'=>$announcements]);
    }
    
}
