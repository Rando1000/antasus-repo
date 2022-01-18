<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use DB;
use Illuminate\Support\Facades\Auth;
use Auth as GlobalAuth;
use Illuminate\Http\Request;



/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $userId = Auth::user();
        $listproducts = Product::where('user_id', $userId->id)->get();
        return view('frontend.user.dashboard', compact('listproducts', 'userId'));
    }


    public function upload(Request $request)
    {

        if ($request->hasFile('avatarheader')) {
            $avatPath = $request->avatarheader->store('userheader');
            Auth()->user()->update(['avatarheader'=>$avatPath]);
            // Auth()->user()->avatarheader = $avatPath;
        }

        
        if ($request->hasFile('dashpic')) {
            $avatarPath = $request->dashpic->store('useravtar');
            Auth()->user()->update(['dashpic'=>$avatarPath]);
            // Auth()->user()->avatar = $avatarPath;
        }
            return redirect('/dashboard', 301);
    }

    public function portfolio(Category $category, Product $product)
    {
        $userId = Auth::user();
        $listproducts = Product::where('user_id', $userId->id)->get();
        // foreach ($listproducts->userId as $product) {

        // }
        // dd([$listproducts]);
        

        return view('frontend.user.helper.dashportfol', compact('listproducts', 'userId', 'product'));
    }



    // public function uploadavat(Request $request)
    // {

    //     if ($request->hasFile('avatar')) {
    //         $avataryPath = $request->avatar->store('useravtar');
    //         Auth()->user()->update(['avatar'=>$avataryPath]);
            // Auth()->user()->avatar = $avatarPath;
        // }
        // return redirect('/dashboard', 301);
        // $data = $request->validate([
            
        //     "avatar" => "image|mimes:jpg,png,jpeg,gif,svg",
        // ]);
        
        // Auth()->user()->update($data);
        // notify()->success('Ihr Avatar wurde aktualisiert!', ''.Auth::user()->name);
        //   return redirect('/dashboard');
    // }

    // public function show($slug)
    // {
    //     // Show individual company
    //     $user = product::where('slug', $slug)->first();
    //     return view('frontend.user.helper.dashheader')->with('user', $user);
    // }
}
