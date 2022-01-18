<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMarketplace extends Model
{
    public function adreplies()
    {
        return $this->hasMany(Reply::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    protected $table = 'product';
    public $timestamps = false;
    
     /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'title',
        'price',
        'type',
        'desc',
        'pictures',
        'zipCode',
        'location',
        'street',
        'top',
        'start_date',
        'ends_date',
    ];
     /**
     * @var string[]
     */
    protected $dates = [
        'start_date',
        'end_date',
    ];
}
