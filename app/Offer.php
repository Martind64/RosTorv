<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'store_id', 'name', 'description', 'price', 'discount', 'img_path', 'start_date', 'end_date',
    ];

    public function store(){
        return $this->belongsTo('App\Store');
    }

}
