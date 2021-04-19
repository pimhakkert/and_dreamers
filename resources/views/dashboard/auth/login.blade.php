@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Login')

@section('content')
    <div class="holder holder-dashboard-outside bg-left lg:bg-center">
        <div class="@if($errors->any()) form-has-errors @endif">
            <form method="POST" action="{{ route('login') }}" class="bg-white-light max-w-xs lg:max-w-full">
                <div class="p-3 pb-0 flex flex-col items-center">
                    <h1 class="text-3xl lg:text-4xl 2xl:text-6xl -mt-6.5 lg:-mt-7 2xl:-mt-9 text-brown font-semibold mr-4 2xl:mr-0">ADMINISTRATOR</h1>
                    @csrf
                    <div class="w-2/3">
                        <div class="form-group">
                            <label for="email">EMAIL</label>
                            <input type="email" name="email" id="email" placeholder="email@domain.com">
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <div class="relative">
                                <input type="password" name="password" id="password" class="w-full">
                                <i class="fas fa-eye absolute right-0 top-1/2 text-md lg:text-xl cursor-pointer text-brown" id="view-password"></i>
                            </div>

                        </div>
                        @if($errors->any())
                            <p class="text-red-light mt-2 text-sm lg:text-md">The specified password and email do not match. Try again</p>
                        @endif
                        <div class="flex items-center cursor-pointer mt-4 remember-me">
                            <input type="checkbox" name="remember" id="remember" class="border-brown rounded-md border-2 mr-5">
                            <label for="remember" class="text-brown cursor-pointer select-none text-sm lg:text-lg">Remember me</label>
                        </div>
                    </div>
                    <a class="mr-5 lg:mr-0 self-end lg:self-center text-xs lg:text-lg text-brown lg:text-brown-light mt-10" href="{{ route('password.request') }}">I forgot my password!</a>
                </div>
                <button class="mt-6 lg:mt-3 w-full border-5 border-brown leading-none p-3 lg:p-4 2xl:p-5 pb-2 lg:pb-2 text-md lg:text-lg 2xl:text-2xl text-brown font-semibold hover:text-white-light hover:bg-brown ">LOGIN</button>
            </form>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')
<script>
    window.addEventListener('load', () => {
        //View password code
        document.querySelector('#view-password').addEventListener('click', () => {
            let passwordEl = document.querySelector('#password');

            if(passwordEl.type === 'text')
            {
                passwordEl.type = 'password';
            }
            else {
                passwordEl.type = 'text';
            }
        });
    });
</script>
@endsection
