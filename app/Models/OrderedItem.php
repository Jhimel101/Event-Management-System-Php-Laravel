<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    use HasFactory;
    protected $table= "ordered_items";
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }

    
    public function product()
    {
        return $this->hasMany('App\Models\Product','product_id');
    }
}
