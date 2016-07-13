@extends('admin/layout')
@extends('admin/partials/header')
@extends('admin/partials/drawer')

@section('body')
	<div class="body mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col">
		@foreach($articles as $article)
			<div>{{$article->content->body}}</div>
		@endforeach
	</div>
@stop



