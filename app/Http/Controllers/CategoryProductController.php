<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Product;
use App\Models\Category;
use App\Domains\Auth\Models\User;
use Illuminate\Support\Facades\Auth;
use Auth as GlobalAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Foreach_;
use View;

class CategoryProductController extends Controller
{

    // public function __construct() 
    // {
    //     $this->middleware('auth');
    // } 


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\product $product
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {

        // dd([$category]);
        return view('frontend.market.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Product $product
     * @param  \App\Models\Category $category
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Category $category, Request $request, Product $product)
    {
        
        $request->validate([
            "title" => "required|min:3",
            "description" => "required|min:3",
            "pictures" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "price" => "required",
            "created_at"=> "required",
            "location" => "required",
            "country" => "required"
        ]);

        $title = $request->title;
        $description = $request->description;
        $price = $request->price;
        $created_at = $request->created_at;
        $location = $request->location;
        $country = $request->country;
        // $user_id = $request->user_id;
        // $user_name = $request->user_name;

        $product = new product();
        // $product->user_id = $user_id;
        $product->title = $title;
        $product->price = $price;
        $product->location = $location;
        $product->country = $country;
        $product->description = $description;
        $product->category_name = $category->name;
        $product->user_id = auth()->id();
        $product->user_name = Auth::user()->name;
        $product->salerdashpic = Auth::user()->dashpic;
        $product->category_id = $category->id;
        $product->created_at = $created_at;
        
        if ($request->hasFile('pictures')) {
            $filePath = $request->pictures->store('product');
            
            
            $product->pictures = $filePath;
        }
        $product->save();
        notify()->success('Ihre Anzeige geht in wenigen Augenblicken online!', ''.$product->title);
        return redirect('/markets/portfolio', 301);
        
        // dd([$product]);
    }



// /**
//      * Display the specified resource.
//      *
//      * @param  \App\Category $category
//      * @param  \App\product $product
//      * @return \Illuminate\Http\Response
//      * @param  \Illuminate\Http\Request  $request
//      * @return void
//      *
//      */
//     public function search() 
//     {
//         $search_text = $_GET['query'];
//         $productsearch = Product::where('title', 'like', '%'.$search_text.'%')->get();
        
//         $categories = Category::where('parent_id', request('id'))->with('children')->get();
//         return view('frontend.market.searchresult', compact('productsearch', 'categories'));

//     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category $category
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     * @return void
     *
     */
    public function portfolio(Category $category, Product $product)
    {
        $userId = Auth::user();
        $listproducts = Product::where('user_id', $userId->id)->get();
        // foreach ($listproducts->userId as $product) {

        // }
        // dd([$listproducts]);
        

        return view('frontend.market.portfolio', compact('listproducts', 'userId', 'product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category $category
     * @param  \App\Models\product $product
     * @return \Illuminate\Http\Response
     * @return void
     *
     */
    public function show($id, Product $product)
    {

        $new = DB::table('products')->orderBy('created_at', 'desc')->take(4)->get();
        $categories = Category::where('parent_id', null)->with('children')->get();
        $products = Product::whereIn('user_id', $id)->pluck()->get()->count();
        $find = DB::table('products')->select('id', 'title', 'user_name', 'price', 'location', 'country', 'created_at', 'description', 'category_name', 'pictures')->get();
        // // // dd($product->toArray());

        
        $productMain = DB::table('products')->select('id', 'user_name', 'user_id', 'salerdashpic', 'title', 'price', 'location', 'created_at', 'description', 'pictures', 'category_name')->get();




        return view('frontend.market.product', compact('find', 'products', 'product', 'categories', 'new', 'productMain'));

        

        // dd([$category,$product]);
    }


    
    



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $product
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Product $product)
    {
        return view('frontend.market.editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Product $product
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request::validate
     */
    public function update(Request $request, Category $category, Product $product)
    {
        $data = $request->validate([
            "title" => "min:3",
            "description" => "",
            "pictures" => "image|mimes:jpg,png,jpeg,gif,svg",
            "price" => "",
        ]);
        
        $product->update($data);
    
        notify()->success('Ihre Anzeige wurde aktualisiert!', ''.$product->title);
        return redirect('/markets/portfolio', 301, compact('product', 'category'));
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $product
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,Product $product)
    {

        // $delete = DB::table('product')
        //         ->where('id', $id)
        //         ->delete();

        $product->delete();
        notify()->success('Ihre Anzeige wurde gelöscht', ''.$product->title);
        
        return redirect('/markets/portfolio');
    }
}
