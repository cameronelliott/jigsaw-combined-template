@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    <div class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">   
        <h1>{{ $page->title }}</h1>

        <div class="text-2xl border-b border-blue-200 mb-6 pb-10">
            @yield('content')
        </div>

        @foreach ($page->posts($posts) as $post)
            @include('_components.post-preview-inline')

            @if (! $loop->last)
                <hr class="w-full border-b mt-2 mb-6">
            @endif
        @endforeach

        @include('_components.newsletter-signup')
    </div>
@stop
