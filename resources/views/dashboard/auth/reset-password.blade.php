@extends('dashboard.layouts.dashboard-outside')

@section('title', 'Reset password')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="holder holder-dashboard-outside bg-left lg:bg-center">
        <div class="@if($errors->any()) form-has-errors @endif">
            <form method="POST" action="{{ route('password.update') }}" class="bg-white-light max-w-xs lg:max-w-full">
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <input type="hidden" name="email" value="{{ $request->get('email') }}">
                <div class="p-3 pb-0 flex flex-col items-center">
                    <h1 class="text-3xl lg:text-4xl 2xl:text-6xl -mt-6.5 lg:-mt-7 2xl:-mt-9 text-brown font-semibold mr-4 2xl:mr-0">NEW PASSWORD</h1>
                    @csrf
                    <div class="w-2/3 lg:mt-2">
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <div class="relative">
                                <input type="password" name="password" id="password" class="w-full">
                                <i class="fas fa-eye absolute right-0 top-1/2 text-md lg:text-xl cursor-pointer text-brown view-password"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">CONFIRM PASSWORD</label>

                            <div class="relative">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full">
                                <i class="fas fa-eye absolute right-0 top-1/2 text-md lg:text-xl cursor-pointer text-brown view-password"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="mt-12 lg:mt-20 lg:mt-3 w-full border-5 border-brown leading-none p-3 lg:p-4 2xl:p-4 pb-2 lg:pb-2 2xl:pb-3 text-md lg:text-lg 2xl:text-2xl text-brown font-semibold hover:text-white-light hover:bg-brown ">SEND</button>
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
            let elements = document.querySelectorAll('.view-password');

            for(let i=0; i<elements.length; i++)
            {
                elements[i].addEventListener('click', () => {
                    let passwordEl = elements[i].previousElementSibling;

                    if(passwordEl.type === 'text')
                    {
                        passwordEl.type = 'password';
                    }
                    else {
                        passwordEl.type = 'text';
                    }
                });
            }
        });
    </script>
@endsection


