@extends('public.layout.main')
@section('content')
@push('Links')
@include('public.includes.pagesLink'){{-- done --}}
@endpush
@include('public.includes.navbar'){{-- done --}}
@push('page')
Topics Listing
@endpush
@include('public.includes.header'){{-- done --}}
@include('public.includes.popularTopics')
@include('public.includes.trinding_topics')
@endsection

