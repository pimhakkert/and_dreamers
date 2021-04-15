@extends('dashboard.layouts.dashboard-inside')

@section('content')
        <div class="">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div>
                    @livewire('profile.update-profile-information-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div>
                    @livewire('profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div>
                    @livewire('profile.two-factor-authentication-form')
                </div>
            @endif

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())

                <div>
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
