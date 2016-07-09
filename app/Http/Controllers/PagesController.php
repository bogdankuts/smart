<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller {

	public function __construct($lang) {
		$this->defineLanguage($lang);
	}

	public function index(Request $request, $lang) {
	    //$this->defineLanguage($lang);
	    return view('welcome');
    }

	public function contacts($lang = 'ua') {
		return "This is contacts in $lang";
	}
}
