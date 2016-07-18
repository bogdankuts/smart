<?php

namespace App\Http\Controllers\Admin;

use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller {

	public function index() {
		if (\Auth::user()->master) {
			$articles = Article::with('content')
				->orderBy('published_at', 'desc')
				->get();
		} else {
			$articles = Article::with('content')
				->where('created_by', \Auth::user()->id)
				->orderBy('published_at', 'desc')
				->get();
		}

		return view('admin.articles.articles')->with([
			'articles' => $articles,
		    'env' => 'articles'
		]);
	}
	public function show(Article $article) {

		return view('admin.articles.article')->with([
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
