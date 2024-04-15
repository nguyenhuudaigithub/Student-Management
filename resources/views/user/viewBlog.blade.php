@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $blog->title }}</div>
                <div class="card-body">
                    <div>{!! $blog->detail !!}</div>
                </div>
            </div>
        </div>



    @endsection
