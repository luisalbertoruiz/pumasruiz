@extends('layout.main')
@section('title')
Pumas Ruiz F.C.
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navbar')
@stop
@section('content')
	@include('home.match')
	@include('home.carousel')
	@include('home.notice')
	@include('home.table')
@stop
