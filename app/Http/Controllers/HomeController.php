<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keyword;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Search key.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) 
    {
        $word = $request->get('key', '');
        if(!$word) {
            return response([]);
        }
        $keywords = Keyword::where('text', 'like', '%' . $word . '%')->get();
        return response($keywords);
    }
}
