<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Routing\Route;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    

    public function products() 
    {
        return $this->belongsToMany(product::class);
    }


    public function getBreadcrumbAttribute()
    {
        return $this->breadcrumb();
    }


    public function breadcrumb()
    {
        return '<a href="'.route('frontend.markets').'">Categories</a> '.self::ancestors($this->id)->pluck('name', 'id')
    
            -> map(function ($item,$key) {

                return '<a href="'.route('frontend.categories', $key).'">'.$item.'</a>';
            })->implode('');
    }


    public function getBreadcrumb2Attribute()
    {
        return $this->breadcrumb2();
    }
    use NodeTrait;

    public function breadcrumb2()
    {
        return '<a href="'.route('frontend.advert').'">Categories</a> >> '.self::ancestors($this->id)->pluck('name', 'id')
    
            -> map(function ($item,$key) {

                return '<a href="'.route('frontend.advertcreate', $key).'">'.$item.'</a>';
            })->implode('>>');
    }


    public function getProductsCountAttribute()
    {
        return $this->productsCount();
    }

    public function productsCount()
    {
        return product::whereIn('category_id', self::descendantsAndSelf($this->id)->pluck('id')->toArray())->get()->count();
    }

    

    public function descendantsProducts()
    {
        return Product::whereIn('Category_id', self::descendantsAndSelf($this->id)->pluck('id')->toArray())->get();   
        
        // return adreply::whereIn('product_id', $product_ids)->get()->count();
    }



    public function getPostCountAttribute()
    {
        return $this->products->count();
    }

    public function getPostsCountAttribute()
    {
        return adreply::whereIn('product_id',$this->descendantsProducts()->pluck('id'))->get()->count();
    }

    public function getLatestProductAttribute()
    {
        return adreply::whereIn('product_id',$this->descendantsProducts()->pluck('id'))->latest();
    }
    

}
