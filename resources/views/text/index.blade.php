@extends('admin.template.main')<!--llamo al archivo main-->
<html>
<head>
	<title>{{ $article->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\general.css')}}">
	<script type="text/javascript" src="{{asset('plugins\jquery\js\jquery-2.2.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins\bootstrap\js\bootstrap.js')}}"></script>
</head>

<body>
		
	<center>
<h1>Ariticulo  {{ $article->title }}.</h1><!--muestro el usuario que realizo el articulo-->

	</center>

<hr>

<p>{{$article->content}}</p>
<hr>
{{$article->user->name}}|{{$article->category->name}}

 

@foreach ($article->tags as $tag) 

|{{$tag->name}}

@endforeach

</body>
</html>