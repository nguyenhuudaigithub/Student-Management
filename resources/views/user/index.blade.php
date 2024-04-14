@extends('layouts.app')

@section('content')
@foreach ($courses as $courses)
<div class="row g-0">
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded" src="https://i.ytimg.com/vi/h4UtOtAOlpQ/maxresdefault.jpg">
        </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="h-100 d-flex flex-column justify-content-center p-5">
            <a href="/courses/{{ $courses->slug }}">
                <h1 class="mb-4">{{ $courses->title }}</h1>
                <p>{{ $courses->tags }}</p>
                <p class="mb-4">{{ $courses->description }}
                </p>
            </a>
        </div>
    </div>
</div>

@endforeach

@endsection
