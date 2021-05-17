@extends('dashboard.layouts.dashboard-outside')

@section('title', '2FA')

@section('content')
    <div class="holder holder-dashboard-outside bg-left lg:bg-center">
        <div class="@if($errors->any()) form-has-errors @endif">
            <form method="POST" action="{{ route('two-factor.login') }}" class="bg-white-light max-w-xs lg:max-w-full">
                <div class="p-3 pb-0 flex flex-col items-center">
                    <h1 class="text-3xl lg:text-4xl 2xl:text-6xl -mt-6.5 lg:-mt-6 2xl:-mt-9 text-brown font-semibold mx-20 lg:mx-40">2FA</h1>
                    @csrf
                    <div class="w-2/3">
                        <div class="form-group">
                            <label id="label" for="input">CODE</label>
                            <input id="input" type="text" name="code">
                        </div>
                        @if($errors->any())
                            <p class="text-red-light mt-2 text-sm lg:text-lg">The specified password and email do not match. Try again</p>
                        @endif

                    </div>
                    <button type="button" id="toggler" class="mr-5 lg:mr-0 self-end lg:self-center text-xs lg:text-lg text-brown lg:text-brown-light mt-10">Use backup recovery code</button>
                </div>
                <button class="mt-6 lg:mt-3 w-full border-5 border-brown leading-none p-3 lg:p-4 2xl:p-4 pb-2 lg:pb-2 2xl:pb-3 text-md lg:text-lg 2xl:text-2xl text-brown font-semibold hover:text-white-light hover:bg-brown ">LOGIN</button>
            </form>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')
<script>
    window.addEventListener('load', () => {
        const toggleButton = document.querySelector('#toggler');

        const label = document.querySelector('#label');
        const input = document.querySelector('#input');

        toggleButton.addEventListener('click', () => {
            if(input.getAttribute('name') === 'code')
            {
                input.setAttribute('name', 'recovery_code');
                label.innerText = 'RECOVERY CODE';
                toggleButton.innerText = 'Use regular code';
            }
            else
            {
                input.setAttribute('name', 'code');
                label.innerText = 'CODE';
                toggleButton.innerText = 'Use backup recovery code';
            }
        });
    });
</script>
@endsection
