<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticateController;

//model
use App\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // If a store id has been sent, retrieve only offers with that id
        if (!isset($_GET['store_id'])) {
            $offer = Offer::all();
            $response = Response::json($offer, 200);
            return $response;
        }

        $storeId = $_GET['store_id'];

        $offer = Offer::where('store_id', '=', $storeId)->get();

        $response = Response::json($offer, 200);
        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Authenticate the user
        $auth = AuthenticateController::authenticate();
        
        // return response if authentication fails;
        if ($auth['result'] == false) {
            return $auth['response'];
        }

        // Check the role of the store
        if ($auth['role'] !== 'ROLE_ADMIN') {
            return Response::json([
                'error' => [
                    'message' => 'Admin rights required']]);
        }

        // Datetime format for testing - 2017-01-19 03:14:07
        if((!$request->store_id) || (!$request->name) || (!$request->description) || (!$request->price) || (!$request->discount) || (!$request->img_path) || (!$request->start_date) || (!$request->end_date)) {
            $response = Response::json([
                'error' => [
                    'message' => 'Please enter all required fields']], 422);
            return $response;
        }

        $offer = new Offer;

        $offer->store_id = $request->store_id;
        $offer->name = $request->name;
        $offer->description = $request->description;
        $offer->price = $request->price;
        $offer->discount = $request->discount;
        $offer->img_path = $request->img_path;
        $offer->start_date = $request->start_date;
        $offer->end_date = $request->end_date;

        $offer->save();

        $response = Response::json([
            'message' => 'The offer '.$offer->name.' has been created'], 200);
        return $response;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $offer = Offer::find($id);

        if(!$offer) {
            $response = Response::json([
                'error' => [
                    'message' => 'The offer could not be found']], 422);
            return $response;
        }

        $response = Response::json($offer, 200);

        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Authenticate the user
        $auth = AuthenticateController::authenticate();
        
        // return response if authentication fails;
        if ($auth['result'] == false) {
            return $auth['response'];
        }
        // Find the event on ID
        $offer = Offer::find($id);

        if (!$offer) {
            $response = Response::json([
                'error' => [
                    'message' => 'The offer could not be found']], 422);

            return $response;
        }

        $offer->store_id = $request->store_id;
        $offer->name = $request->name;
        $offer->description = $request->description;
        $offer->price = $request->price;
        $offer->discount = $request->discount;
        $offer->img_path = $request->img_path;
        $offer->start_date = $request->start_date;
        $offer->end_date = $request->end_date;

        $offer->save();

        $response = Response::json([
            'message' => 'The offer '.$offer->name.' has been updated'], 200);

        return $response;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Authenticate the user
        $auth = AuthenticateController::authenticate();
        
        // return response if authentication fails;
        if ($auth['result'] == false) {
            return $auth['response'];
        }

        // Check the role of the store
        if ($auth['role'] !== 'ROLE_ADMIN') {
            return Response::json([
                'error' => [
                    'message' => 'Admin rights required']]);
        }

        $offer = Offer::find($id);

        if (!$offer) {
            $response = Response::json([
                'error' => [
                    'message' => 'The offer could not be found']], 422);
            return $response;
        }

        Offer::destroy($id);
        $response = Response::json([
            'message' => 'The offer '.$offer->name.' has been deleted'], 200);
        return $response;
    }
}
