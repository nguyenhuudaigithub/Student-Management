@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif

@if ($errors->any())
<div class="mb-4">
    <div class="font-medium text-sm text-red-600">
        {{ __('Whoops! Something went wrong.') }}
    </div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="row g-0">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 d-flex flex-column justify-content-center p-5">
                <div class="text-center mb-4">
                    <h1>Đăng Ký</h1>
                </div>

                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input class="form-control border-0" id="name" placeholder="name" type="name" name="name" :value="old('name')" required autofocus autocomplete="username" />
                                <label for="name">Họ Tên</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input class="form-control border-0" id="mssv" placeholder="mssv" type="mssv" name="mssv" :value="old('mssv')" required autofocus />
                                <label for="mssv">MSSV</label>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-floating">
                                <input class="form-control border-0" id="email" placeholder="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input class="form-control border-0" id="password" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
                                <label for="password">Mật Khẩu</label>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input class="form-control border-0" id="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" name="password_confirmation" required autocomplete="current-password" />
                                <label for="password_confirmation">Nhập Lại Mật Khẩu</label>
                            </div>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4 d-flex align-items-center" >
                            <x-label for="terms" style="display: flex;">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('Tôi đồng ý với :terms_of_service và :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Điều khoản dịch vụ').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Chính sách bảo mật').'</a>',
                                    ]) !!}
                                </div>
                            </x-label>
                        </div>
                        @endif


                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Đăng Ký</button>
                        </div>

                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Đã đăng ký?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
            <div class="position-relative h-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4276422065273!2d106.78279807580208!3d10.855042689298537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c3debb5aad%3A0x5fb58956eb4194d0!2zxJDhuqFpIEjhu41jIEh1dGVjaCBLaHUgRQ!5e0!3m2!1svi!2s!4v1713095855082!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</form>
@endsection
