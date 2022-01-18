<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class adreply extends Model
{
    public function products()
    {
        return $this->belongsTo(product::class);
    }


    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
