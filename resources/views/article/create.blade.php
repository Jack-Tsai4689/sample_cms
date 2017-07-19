@extends('site.layouts.default')
@section('content')
<section class="container">
<form action="{{ url('article') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" name="title" class="form-control">
	<textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
	<input type="submit" value="送出" class="btn btn-primary">
</form>
</section>
@stop