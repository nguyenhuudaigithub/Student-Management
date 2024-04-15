@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hồ sơ') }}</div>

                <div class="card-body">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')

                        <hr>
                    @endif

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-4">
                            @livewire('profile.update-password-form')
                        </div>

                        <hr>
                    @endif

                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-4">
                            @livewire('profile.two-factor-authentication-form')
                        </div>

                        <hr>
                    @endif

                    <div class="mt-4">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <hr>

                        <div class="mt-4">
                            @livewire('profile.delete-user-form')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
