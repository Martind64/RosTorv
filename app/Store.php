<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Response;

class Store extends Model
{

	public $timestamps = false;
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'role', 'api_token',
    ];

    protected $hidden = [
    'api_token', 'password'];

    public function offers(){
        return $this->hasMany('App\Offer');
    }

    public function storeCords(){
        return $this->hasMany('App\StoreCords');
    }

    // Check if a store is already created
    // The method takes a property and a value to search for
    public static function checkExists($property, $value){
        $store = Store::where($property, '=', $value)->get();

        $count = count($store);

        if ($count >= 1) {
            $response = Response::json([
                'error' => [
                    'message' => 'The store already exists']]);

            return ['result' => true, 'response' => $response];
        }
        // Return false if the user doesn't exist
        return ['result' => false];
    }

}


