<?php

namespace App\Http\Controllers\Backend;
use DB;
use View;
use App\Http\Controllers\Controller;
use App\ModelMarketplace;
use Redirect;

use Illuminate\Http\Request;

class BackendMarketplace extends Controller
{
        /**
        * Display a listing of the resource.
        *
        * @return Response
        */
            public function index()
            {
            $marketplaces = ModelMarketplace::all();
            return view('backend.market.index')->with('Marketplace', $marketplaces);
            
            }
            /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
            public function create()
            {
                return View::make('backend.market.create');
            }

            /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
            public function store(Request $request)
            {
                $request->validate([
                    'userid'=>'required',
                    'title'=>'required'
                ]);
                $marketplaces = new ModelMarketplace([
                    'userid' => $request->get('userid'),
                    'title' => $request->get('title'),
                ]);
                $marketplaces->save();

                notify()->success('Marketplace Created','Marketplace');

                return redirect('/admin/marketplace/');

            }
            public function update(Request $request, $id)
            {
                $request->validate([
                    'userid'=>'required',
                    'title'=>'required'
                ]);
    
                $marketplaces = ModelMarketplace::find($id);
                $marketplaces->userid = $request->get('userid');
                $marketplaces->title = $request->get('title');
                $marketplaces->save();
    
    
                notify()->success('Marketplace Updated');
                return redirect('/admin/marketplace/');
            }



            public function edit($id)
            {
            $marketplaces = ModelMarketplace::find($id);
            return View::make('backend.market.edit')
                ->with('marketplaces', $marketplaces);
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
            $marketplaces = ModelMarketplace::find($id);
            $marketplaces->delete();

            // redirect

            notify()->success('Marketplace Deleted');
            return Redirect::to('/admin/marketplace');
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
    
}
