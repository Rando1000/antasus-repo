<?php

namespace App\Http\Controllers;
use App\Models\Category;

use DB;
use App\Domains\Auth\Models\User;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
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
     * Show the form for creating a new resource.
     * @param  \App\product $product
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    // public function create(Category $category)
    // {

    //     // dd([$category]);
    //     return view('frontend.market.create', compact('category'));
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find() 
    {
        $categories = Category::where('parent_id', null)->with('children')->get();
        
        $find = DB::table('products')->select('id', 'title', 'price', 'location', 'created_at', 'description', 'category_name', 'pictures')->get();
        $new = DB::table('products')->orderBy('start_date', 'desc')->take(4)->get();
        return view('frontend.market.product', ['announcements'=>$anno , 'find'=>$find, 'new'=>$new, 'categories'=>$categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @param  \App\product $product
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     */
    public function search() 
    {
        $search_text = $_GET['s'];
        $productsearch = Product::where('title', 'like', '%'.$search_text.'%')->get();
        
        $categories = Category::where('parent_id', request('id'))->with('children')->get();
        return view('frontend.market.searchresult', compact('productsearch', 'categories'));

    }

    // public function category($id) 
    // {
        
    //     $categories = Category::where('id', $id)->with('children')->get();

    //     return view('frontend.market.helper.result', ['categories'=>$categories]);

    // }
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
    //  * @param  \App\Category $category
    //  * @param  \App\product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Category $category, product $product)
    // {

    //     $new = DB::table('products')->orderBy('start_date', 'desc')->take(4)->get();
    //     $categories = Category::where('parent_id', null)->with('children')->get();
    //     $find = DB::table('products')->select('id', 'title', 'price', 'location', 'country', 'created_at', 'description', 'category_name', 'pictures')->get();
    //     // // // dd($product->toArray());

        
    //     $productMain = DB::table('products')->select('id', 'title', 'price', 'location', 'created_at', 'description', 'pictures', 'category_name')->get();




    //     return view('frontend.market.product', compact('find', 'product', 'categories', 'new', 'productMain'));

        

    //     // dd([$category,$product]);
    // }
    
    // public function search(Category $category, product $product) 
    // {
    //     $search_text = $_GET['query'];
    //     $productsearch = Product::where('title', 'like', '%'.$search_text.'%')->with('categories')->get();

    //     return view('frontend.market.searchresult', compact('productsearch', 'product', 'category'));

    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdel = product::find('id', $id);
        $productdel->delete();
        return redirect('frontend.market.portfolio', compact('productdel'));
    }
}
