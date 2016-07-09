<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller {
    public function index(Request $request, $lang = 'ua') {
	    return "This is index in $lang";
    }

	public function contacts($lang = 'ua') {
		return "This is contacts in $lang";
	}
}
