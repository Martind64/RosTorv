<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreCords extends Model
{
    public $timestamps = false;
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_id', 'latitude', 'longitude', 
    ];

    public function store(){
        return $this->belongsTo('App\Store');
    }
}
