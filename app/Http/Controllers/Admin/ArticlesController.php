<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller {

	public function index() {

		return view('admin.articles')->with([
			'articles' => Article::with('content')->get(),
		    'env' => 'articles'
		]);
	}
	public function show(Article $article) {

		return view('admin.article')->with([
			'article' => $article,
		    'env'   => 'article'
		]);
	}
	public function edit() {
		return 'Some kind of edit form';
	}
	public function update() {
		dd('Update request');
	}
}
