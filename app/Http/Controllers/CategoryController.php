<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        $anno = DB::table('announcements')->select('id', 'area', 'type', 'message', 'enabled')->where('area', 'frontend')->get();
        $find = DB::table('products')->select('id', 'title', 'price', 'location', 'created_at', 'description', 'category_name', 'pictures')->get();
        $new = DB::table('products')->orderBy('start_date', 'desc')->take(4)->get();
        $newer = DB::table('products')->orderBy('start_date', 'desc')->take(25)->get();
        $top = DB::table('market')->orderBy('start_date', 'desc')->where('top', 'yes')->take(4)->get();
        $newads = DB::table('products')->orderBy('created_at', 'desc')->take(15)->get();
        return view('frontend.market.categories', ['announcements'=>$anno , 'categories'=>$categories, 'find'=>$find, 'new'=>$new, 'newer'=>$newer, 'top'=>$top, 'newads'=>$newads]);
    }


    /**
     * Display a listing of the resource.
     * @param  \App\Models\Category $category
     * @param  \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function categories($id)
    {
        $categories = Category::where('id', $id)->with('children')->get();
        $anno = DB::table('announcements')->select('id', 'area', 'type', 'message', 'enabled')->where('area', 'frontend')->get();
        $find = DB::table('products')->select('id', 'title', 'price', 'location', 'created_at', 'description', 'category_name', 'pictures')->get();
        $new = DB::table('products')->orderBy('created_at', 'desc')->take(4)->get();
        $newer = DB::table('products')->where('category_id', $id)->orderBy('created_at', 'desc')->take(25)->get();
        $top = DB::table('market')->orderBy('start_date', 'desc')->where('top', 'yes')->take(4)->get();

        return view('frontend.market.categoriese', ['announcements'=>$anno , 'categories'=>$categories, 'find'=>$find, 'new'=>$new, 'newer'=>$newer, 'top'=>$top]);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @param App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function advert()
    {
        $categories = Category::where('parent_id', null)->get();
        $anno = DB::table('announcements')->select('id', 'area', 'type', 'message', 'enabled')->where('area', 'frontend')->get();
        $find = DB::table('products')->select('id', 'title', 'price', 'location', 'created_at', 'description', 'category_name', 'pictures')->get();
        $new = DB::table('products')->orderBy('start_date', 'desc')->take(4)->get();
        $newer = DB::table('products')->orderBy('start_date', 'desc')->take(25)->get();
        $top = DB::table('market')->orderBy('start_date', 'desc')->where('top', 'yes')->take(4)->get();
        return view('frontend.market.advertise', ['announcements'=>$anno , 'categories'=>$categories, 'find'=>$find, 'new'=>$new, 'newer'=>$newer, 'top'=>$top]);
    }

    public function creater($id)
    {
        $categories = Category::where('id', $id)->with('children')->get();
        $anno = DB::table('announcements')->select('id', 'area', 'type', 'message', 'enabled')->where('area', 'frontend')->get();
    
        return view('frontend.market.advertise', ['announcements'=>$anno , 'categories'=>$categories]);
    }


    public function product()
    {
        $categories = Category::where('parent_id', null)->with('children')->get();
        $anno = DB::table('announcements')->select('id', 'area', 'type', 'message', 'enabled')->where('area', 'frontend')->get();

        $productMain = DB::table('products')->select('id', 'title', 'price', 'location', 'created_at', 'description')->get();

        return view('frontend.market.product', ['announcements'=>$anno , 'productMain'=>$productMain, 'categories'=>$categories]);

        
    }

    public function ctg($id)
    {
        $find = DB::table('products')->select('id', 'title', 'price', 'location', 'created_at', 'description', 'category_name', 'pictures')->get();
        $newer = DB::table('products')->orderBy('start_date', 'desc')->take(25)->get();
        $new = DB::table('products')->orderBy('start_date', 'desc')->take(4)->get();
        $categories = Category::where('id', $id)->with('children')->get();
        return view('frontend.market.categoriese', compact('categories', 'new', 'newer', 'find'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function newads($id)
    {
        $newads = Product::where('id', $id)->orderBy('created_at', 'asc')->get();
        return view('frontend.market.helper.ticker', compact('newads'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Category  $category
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Category $categories)
    // {
    //     $categories = Category::where('parent_id', null)->with('children')->get();
    //     return view('frontend.market.product', compact('categories'));
    // }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
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
