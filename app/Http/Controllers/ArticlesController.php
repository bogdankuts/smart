<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleContent;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller {
	public function index(Article $article) {
		//return "This are all of the articles in $lang";
	}

    public function show(Article $article) {
	    dd(\App::getLocale());
	    dd($article);
	    //dd($lang);
	    //dd($article->content());
    }

}
