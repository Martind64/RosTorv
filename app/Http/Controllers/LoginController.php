<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Store;

class LoginController extends Controller
{
    
    public function login(Request $request){
    	// Set the name and password to the posted values
        if((!$request->name) || (!$request->password)) {
            // Create a response using the response class
            $response = Response::json([
                'error' => [
                    'message' => 'Please enter all required fields']], 422);
            return $response;
        }
        
    	$name = $request->name;
    	$password = $request->password;

    	// Check if the store exists
    	$store = Store::where('name', '=', $name)->where('password', '=', $password)->get();

    	// If the store doesn't exist throw an error
    	// Else return a token and save it to the verified Store
    	$length = count($store);
    	if ($length < 1) {
    		return Response::json([
    			'error' => [
    				'message' => 'invalid credentials']]);
    	}else{
    		$token = str_random(60);
    		$store[0]->api_token = $token;
    		$store[0]->save();

    		return $token;
    	}


    }
}