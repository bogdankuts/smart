@extends('admin.layout')
@extends('admin.partials.header')
@extends('admin.partials.drawer')

@section('body')
	<div class="body mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col">
		{!! Form::open(['url' => '/admin/articles', 'method' => 'POST', 'class' => 'admin_create_form']) !!}
			@include('admin.articles._form')
		{!! Form::close() !!}
	</div>
@stop



