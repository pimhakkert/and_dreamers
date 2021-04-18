@extends('dashboard.layouts.dashboard-inside')

@section('content')
        <div class="">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div>
                    @livewire('dashboard.profile.update-profile-information-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div>
                    @livewire('dashboard.profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div>
                    @livewire('dashboard.profile.two-factor-authentication-form')
                </div>
            @endif

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())

                <div>
                    @livewire('dashboard.profile.delete-user-form')
                </div>
            @endif
        </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
