<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller {

	public function index() {
		return 'All articles';
	}
	public function show() {
		return 'This is one article';
	}
	public function edit() {
		return 'Some kind of edit form';
	}
	public function update() {
		dd('Update request');
	}
}
