@extends('layouts.app')

@section('content')
@foreach ($blogs as $blog)
<div class="row g-0 mb-5">
    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s" style="min-height: 300px;"> <!-- Adjusted min-height -->
        <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded" src="{{ $blog->photo_url }}">
        </div>
    </div>
    <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
        <div class="h-100 d-flex flex-column justify-content-center p-5">
            <a href="/blogs/{{ $blog->slug }}">
                <h1 class="mb-4">{{ $blog->title }}</h1>
                <p>{{ $blog->tags }}</p>
                <p class="mb-4">{{ $blog->description }}
                </p>
            </a>
        </div>
    </div>
</div>

@endforeach

@endsection
