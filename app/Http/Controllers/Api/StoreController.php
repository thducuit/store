<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    //
    public function index()
    {
    	$stores = \App\Store::all();
    	return response([
    			'status' => 'success',
    			'data' => $stores
    		], 200);
    }
}
