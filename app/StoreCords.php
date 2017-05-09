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
        'latitude', 'longitude', 
    ];
}
