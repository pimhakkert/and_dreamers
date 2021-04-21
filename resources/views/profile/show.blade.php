@extends('dashboard.layouts.dashboard-inside')

@section('title', 'Profile')

@section('content')
        <div>
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
        </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
