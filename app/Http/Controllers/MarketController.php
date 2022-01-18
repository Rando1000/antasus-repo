<?php

namespace App\Http\Controllers;
use App\Category;
use App\Domains\Auth\Events\User\UserLoggedIn;
use Illuminate\Http\Request;
use DB;
use View;
use Redirect;
use App\Http\Requests;
use App\Domains\Auth\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\ModelMarketplace;

class MarketController extends Controller
{

    public function index(){

        $anno = DB::table('announcements')->select('id','area','type','message','enabled')->where('area', 'frontend')->get();

        $market = DB::table('market')->select('id','title','price','desc','category','pictures','location','type','shipment','start_date','end_date')->get();

        $new = DB::table('market')->orderBy('start_date', 'desc')->take(15)->get();

        $top = DB::table('market')->orderBy('start_date', 'desc')->where('top', 'yes')->take(4)->get();

        $categories = Category::where('parent_id', null)->with('children')->get();


        return view('frontend.market.index', ['announcements'=>$anno , 'market'=>$market, 'new'=>$new, 'top'=>$top, 'categories'=>$categories]);

    }






    public function create() {
        return view('frontend.market.create');
    }

    public function myportfolio() 
    {
        return view('frontend.market.myportfolio');
    }




    // public function product() {

    //     $anno = DB::table('announcements')->select('id','area','type','message','enabled')->where('area', 'frontend')->get();

    //     $productMain = DB::table('products')->select('id','title','price','location', 'created_at', 'description')->get();

    //     return view('frontend.market.product',['announcements'=>$anno , 'productMain'=>$productMain]);
    // }

    // public function categories()
    //     {

    //     $categories = Category::where('parent_id', null)->with('children')->get();

    //     return view('frontend.market.categories', compact('categories'));

    //     }

        public function category($id)
    {

        $categories = Category::where('id', $id)->with('children')->get();

        return view('frontend.market.categories', compact('categories'));

    }

    public function store() {
        // $users = User::where('id', '!=', Auth::id())->get();
        // $product = new Modelmarketplace();

        // // error_log(request('title'));
        // // error_log(request('desc'));
        // $product->user = request('name');
        // $product->title = request('title');
        // $product->price = request('price');
        // $product->desc = request('desc');
        // $product->pictures = request('pictures');

        // $market->save();

        // return redirect('/market');
    }
    public function testing()
    {
        $nodes = Category::get()->toTree();

        $traverse = function ($categories, $prefix = '-') use (&$traverse) {
            foreach ($categories as $category) {
                echo PHP_EOL.$prefix.' '.$category->name. "<br>";

                $traverse($category->children, $prefix.'-');
            }
        };

        echo "<code>";

        $traverse($nodes);

        "</code>";

        dump(Category::all()->random(1)->first()->toArray());
    }

}
