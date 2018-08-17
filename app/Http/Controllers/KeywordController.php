<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keyword;

class KeywordController extends Controller
{
    //

    // public function search(Request $request) 
    // {
    // 	$word = $request->get('key', '');
    // 	if(!$word) {
    // 		return response([]);
    // 	}
    // 	$keywords = Keyword::where('text', 'like', '%' . $word . '%')->get();
    // 	return response($keywords);
    // }
}
