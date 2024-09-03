@extends('public.layout.main')
@section('content')

    @push('Links')
    @include('public.includes.indexLink')
    @endpush
    @include('public.includes.navbar'){{-- done --}}
    @include('public.includes.home'){{-- search was activated --}}
    @include('public.includes.index'){{-- latest 2 tobics --}}
    @include('public.includes.topics'){{-- categories, topics --}}
    @include('public.includes.how_it_works'){{-- static section --}}
    @include('public.includes.FAQs'){{-- static --}}
    @include('public.includes.testimonials'){{-- images dont come up --}}
    @include('public.includes.indexContact'){{-- static Data --}}
@endsection
