@extends('layouts.bulletin')

@section('head')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../src/portfolio/K_logo.png" type="image/x-icon">
<title>Bulletin board</title>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/Bulletin.css" />
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
@endsection

@section('header')
<div class="row" id="header-color">
	<div class="col-sm-12 text-center siteTitle">
	    <h4>Bulletin Board</h4>
	</div>
</div>
@endsection

@section('contents')
<div class="col-sm-12 text-left">
    <div><a class="float-left p-3 pt-5" href="./bulletin/add">投稿する</a></div>
    <div><a class="float-left p-3 pt-5" href="./">戻る</a></div>
</div>
<table class="table table-bordered table-striped">
<thead class="thead-dark">
	<tr><th>Name</th><th>Title</th><th>Action</th></tr>
</thead>
@foreach ($items as $item)
<tr>
   <td>{{$item->name}}</td>
   <td>{{$item->title}}</td>
   <td>
   		<a class="" href="./bulletin/view/?id={{$item->id}}">View</a>|
   		<a class="" href="./bulletin/edit/?id={{$item->id}}">Edit</a>|
   		<a class="" href="./bulletin/delete/?id={{$item->id}}">Delete</a>
	</td>
</tr>
@endforeach
</table>
{{ $items->links()}}
@endsection