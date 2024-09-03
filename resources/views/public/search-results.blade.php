@extends('public.layout.main')
@section('content')
@push('Links')
@include('public.includes.pagesLink')
@endpush
 @include('public.includes.navbar'){{-- done --}}
 @push('page')
 Search Results
 @endpush
 @include('public.includes.header'){{-- done --}}
 @include('public.includes.searc_results'){{-- one categorycategorie, topics --}}
 @endsection

