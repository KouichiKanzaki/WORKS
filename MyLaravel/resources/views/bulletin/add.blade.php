@extends('layouts.bulletin')

@section('head')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../../src/portfolio/K_logo.png" type="image/x-icon">
<title>Bulletin board</title>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/Bulletin.css" />
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.js"></script>
<script src="../../js/bootstrap.min.js"></script>
@endsection

@section('header')
<div class="row" id="header-color">
	<div class="col-sm-12 text-center siteTitle">
		<h4>Contribution</h4>
	</div>
</div>
@endsection

@section('contents')
<div class="row p-5">
	<form method="post" action="add">
		{{ csrf_field() }}
		<h5>name:</h5>
		<div class="form-group">
			<input type="text" class="form-control" name="name" value="{{old('name')}}">
		</div>
		<h5>title:</h5>
		<div class="form-group">
			<input type="text" class="form-control" name="title" value="{{old('title')}}">
		</div>
		<h5>comment:</h5>
		<div class="form-group w-4">
			<textarea rows="4" cols="40" type="text" class="form-control" name="comment" value="{{old('comment')}}"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="投稿する">
		</div>
	</form>
</div>
<div class="row p-5">
	<p><a class="" href="./">戻る</a></p>
</div>
@endsection