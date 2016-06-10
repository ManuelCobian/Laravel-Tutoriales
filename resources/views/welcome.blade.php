@extends('admin.template.main')<!--llamo al archivo main-->

@section('title')
HOME

@endsection

@section('contenido')
<link rel="stylesheet" type="text/css" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">

<h1>Hola esto es bootstrap</h1>

<a href="#" class="btn btn-success">soy un boton</a>

@endsection

