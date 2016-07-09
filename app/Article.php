<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $dates=['created_at', 'updated_at', 'published_at'];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function content() {
		return $this->hasOne('App\ArticleContent', 'article_id', 'article_id');
	}
}
