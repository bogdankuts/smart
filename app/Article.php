<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = ['created_by', 'type_id', 'slug', 'project_id', 'published_at'];

	protected $dates=['created_at', 'updated_at', 'published_at'];

	protected $primaryKey = 'article_id';

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function content() {
		return $this->hasOne('App\ArticleContent', 'article_id', 'article_id');
	}
}
