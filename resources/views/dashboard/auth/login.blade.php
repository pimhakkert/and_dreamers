@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Login')

@section('content')
    <div class="holder holder-dashboard-outside">
        <div class="@if($errors->any()) form-has-errors @endif">
            <form method="POST" action="{{ route('login') }}">
                <div class="p-3 pb-0 flex flex-col items-center">
                    <h1 class="text-6xl text-brown -mt-9 font-semibold">ADMINISTRATOR</h1>
                    @csrf
                    <div class="w-2/3">
                        <div class="form-group mt-14">
                            <label for="email">EMAIL</label>
                            <input type="email" name="email" id="email" placeholder="email@domain.com">
                        </div>
                        <div class="form-group mt-14">
                            <label for="password">PASSWORD</label>
                            <input type="password" name="password" id="password">
                        </div>
                        @if($errors->any())
                            <p class="text-red-light mt-2">The specified password and email do not match. Try again</p>
                        @endif
                        <div class="flex cursor-pointer mt-4 remember-me">
                            <img src="" alt="O" class="mr-2">
                            <input type="checkbox" name="remember" id="remember" class="opacity-0 w-0 h-0">
                            <label for="remember" class="text-brown-light cursor-pointer select-none">Remind me</label>
                        </div>
                    </div>
                    <a class="text-brown-light mt-5" href="{{ route('password.request') }}">I forgot my password!</a>
                </div>
                <button class="mt-3 w-full border-5 border-brown leading-none p-5 pb-3 text-2xl text-brown font-semibold">LOGIN</button>
            </form>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')
<script>
    let remindMeCheckbox;

    window.addEventListener('load', () => {

        remindMeCheckbox = document.querySelector('#remindme');

        document.querySelector('.remind-me').addEventListener('click', () => {
            toggleCheckbox();
        });

        //Stop the actual input from working.
        remindMeCheckbox.addEventListener('change', (e) => {
            e.preventDefault();
        });

        //Run toggleCheckbox with firstUse being true so the checkbox always stays/goes to false on page load
        toggleCheckbox(true);
    });

    function toggleCheckbox(firstUse = false)
    {
        if(firstUse || remindMeCheckbox.checked)
        {
            remindMeCheckbox.checked = false;

            //TODO add filled hat image to assets and remove alt code
            document.querySelector('.remind-me img').setAttribute('alt', 'O');

            //document.querySelector('.remind-me img').src = 'EMPTY HAT';
        }
        else
        {
            remindMeCheckbox.checked = true;

            //TODO add empty hat image to assets and remove alt code
            document.querySelector('.remind-me img').setAttribute('alt', 'X');

            //document.querySelector('.remind-me img').src = 'FILLED HAT';
        }
    }
</script>
@endsection
