<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  
    ];
    public $timestamps=false;
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider','provider_id');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
    }
}
