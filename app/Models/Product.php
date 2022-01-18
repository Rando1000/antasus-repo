<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class product extends Model
{

    use HasFactory;
    protected $guarded = [];
    // public $timestamps = false;
    public function adreplies()
    {
        return $this->hasMany(adreply::class);
    }
    public function categories() 
    {
        return $this->belongsToMany(category::class);
    }

    public function orders() 
    {
        return $this->belongsToMany(Order::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'products';
    public $timestamps = false;
    
     /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'category_id',
        'user_id',
        'title',
        'price',
        'pictures',
        'type',
        'description',
        'zipCode',
        'location',
        'street',
        'top',
        'start_date',
        'ends_date',
        'user_name',
        'salerdashpic',
    ];
     /**
     * @var string[]
     */
    protected $dates = [
        'start_date',
        'end_date',
    ];

    public function getUserProductsCountAttribute($id)
    {
        return $this->userproductsCount($id);
    }

    public function userproductsCount($id)
    {
        return product::Product::whereIn('user_id', $id)->pluck()->get()->count();
    }

    

    public function descendantsUserProducts()
    {
        return Product::whereIn('user_id', self::descendantsAndSelf($this->id)->pluck('id')->toArray())->get();   
        
        // return adreply::whereIn('product_id', $product_ids)->get()->count();
    }

    protected $primaryKey = 'id';
}
