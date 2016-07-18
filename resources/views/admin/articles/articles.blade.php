@extends('admin.layout')
@extends('admin.partials.header')
@extends('admin.partials.drawer')

@section('body')
	<div class="body mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col">

		@forelse($articles as $article)
			<div class="one_article">
				<p>Id - {{$article->article_id}}</p>
				<p>Type - {{$article->type_id}}</p>
				<p>Project - {{$article->project_id}}</p>
				<p>Published - {{$article->published_at}}</p>
				<p>Created - {{$article->created_at}}</p>
				<p>Views - {{$article->views}}</p>
				<p>Lang - {{$article->content->lang_id}}</p>
				<a href="{{route('admin_article', ['article' => $article->slug])}}">{{$article->content->title}}</a>
				<p>Preview - {{$article->content->preview_text}}</p>
				<div>Body - {{$article->content->body}}</div>
				<p>Image - {{$article->content->image}}</p>
			</div>
		@empty
			<p>No articles</p>
		@endforelse
	</div>
@stop



