<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','start_date', 'end_date', 'img_path',
    ];
}
