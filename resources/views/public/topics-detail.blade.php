@extends('public.layout.main')
@section('content')
@push('Links')
@include('public.includes.pagesLink')
@endpush
@include('public.includes.navbar'){{-- done --}}
@include('public.includes.topic_list_header'){{-- done --}}
@include('public.includes.topic_details'){{-- done --}}
@include('public.includes.newsletter'){{-- static --}}
@endsection
