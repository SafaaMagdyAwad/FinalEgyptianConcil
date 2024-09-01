@extends('public.layout.main')
@section('content')
@include('public.includes.header',['page'=>"Topics Listing"])
@include('public.includes.topics')
@include('public.includes.trinding_topics')
@endsection

