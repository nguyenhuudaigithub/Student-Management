@extends('layouts.app')

@section('content')

@session('status')
<div class="mb-4 font-medium text-sm text-green-600">
    {{ $value }}
</div>
@endsession

<x-validation-errors class="mb-4" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="row g-0">
        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 d-flex flex-column justify-content-center p-12">
                <div class="text-center mb-12">
                    <h1>Quên Mật Khẩu</h1>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input class="form-control border-0" id="email" placeholder="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="col-12" style="margin-top:50px">
                    <button class="btn btn-primary w-100 py-3" type="submit">Tiếp Tục</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
