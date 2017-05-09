<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

	public $timestamps = false;
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'role',
    ];

    public function offers(){
        return $this->hasMany('App\Offer');
    }

    public function storeCords(){
        return $this->hasMany('App\StoreCords');
    }

}


