<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use Response;

class AuthenticateController extends Controller
{
 	public static function authenticate(){
 		// Check to see if a token has been sent with the request
 		if (!isset($_GET['api_token'])) {

 			$response = Response::json([
 				'error' => [
					'message' => 'You need to send a token with your request']], 401);

 			return ['result' => false, 'response' => $response]; 
 
 		}

 		// Get the token
 		$token = $_GET['api_token'];

 		// Find the store that has that token
 		$store = Store::where('api_token', '=', $token)->get();

 		// Count to see if a store was found
 		$length = count($store);

 		if ($length < 1) {
 				$response = Response::json([
					'error' => [
						'message' => 'Invalid token was given']], 406);

	 			return ['result' => false, 'response' => $response];
 		}
 		// Get the role of the store
 		$role = $store[0]->role;

 		// Return true if the store has been authenticated
 		return ['result' => true, 'role' => $role];
 	}

}
