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
	    <h4>VIEW</h4>
	</div>
</div>
@endsection

@section('contents')
<div class="col-sm-12 text-left pt-5 pb-1">
    <p><a class="" href="./">戻る</a></p>
</div>
	<h5 class="border-bottom">Name</h5>
		<p class="p-4">{{$item->name}}</p>
	  
	<h5 class="border-bottom">Title</h5>
	  	<p class="p-4">{{$item->title}}</p>

	<h5 class="border-bottom">Comment</h5>
	   <p class="p-4">{{$item->comment}}</p>
@endsection