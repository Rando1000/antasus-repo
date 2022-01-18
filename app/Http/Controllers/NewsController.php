<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Domains\Announcement\Models\Announcement;


/**
 * Class NewsController.
 */
class NewsController extends Controller
{

 /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        // get all the sharks
        $announcements = Announcement::all();
        return view('backend.announcements.index')->with('Announcement', $announcements);
    }
    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
        public function create()
        {
            return View::make('backend.announcements.create');
        }

        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
            public function store(Request $request)
            {
                $request->validate([
                    'area'=>'required',
                    'type'=>'required',
                    'message'=>'required'
                ]);
                $announcements = new Announcement([
                    'area' => $request->get('area'),
                    'type' => $request->get('type'),
                    'message' => $request->get('message'),
                ]);
                $announcements->save();

                notify()->success('Announcements Created','Announcements');

                return redirect('/admin/announcements/');

            }

        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            //
        }

        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id)
        {
        $announcements = Announcement::find($id);
        return View::make('backend.announcements.edit')
            ->with('Announcement', $announcements);
        }

        /**
            * Update the specified resource in storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function update(Request $request, $id)
        {
            $request->validate([
                'area'=>'required',
                'type'=>'required',
                'message'=>'required'
            ]);

            $announcements = Announcement::find($id);
            $announcements->area =  $request->get('area');
            $announcements->type = $request->get('type');
            $announcements->message = $request->get('message');
            $announcements->save();


            notify()->success('Announcements Updated');
            return redirect('/admin/announcements/');
        }

        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {
           // delete
           $announcements = Announcement::find($id);
           $announcements->delete();

           // redirect

           notify()->success('Announcements Deleted');
           return Redirect::to('/admin/announcements');
        }

    }
