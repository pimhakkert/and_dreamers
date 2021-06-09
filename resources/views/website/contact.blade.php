@extends('website.layouts.menu_and_footer')

@section('title', 'Contact')

@section('content')
    <div class="bg-lightbrown py-28 px-40 pl-72 flex justify-between  h-full flex-col pt-40 pb-16">
        <div class="max-w-2xl -ml-24">
            <h4 class="font-bold text-7xl" style="color: rgba(255,255,255,0.48)">CONTACT</h4>
            <h5 class="text-4xl italic text-brown -mt-12 ml-20">"{{ __('pages/general.footer_contact') }}"</h5>
        </div>
        <div class="flex">
            <form class="w-1/4 mr-32" method="POST" action="{{ route('contactSend') }}">
                @csrf
                <h3 class="text-brown text-3xl font-semibold -mb-10">{{ __('pages/general.contact_title') }}</h3>
                <div class="form-group -mb-10">
                    @if ($errors->has('name'))
                        <div class="text-red">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <input type="text" placeholder="{{ __('pages/general.contact_field_name') }}" name="name" style="border-bottom-width: 3px;">
                </div>
                <div class="form-group -mb-10">
                    @if ($errors->has('phone_number'))
                        <div class="text-red">
                            {{ $errors->first('phone_number') }}
                        </div>
                    @endif
                    <input type="text" placeholder="{{ __('pages/general.contact_field_phone') }}" name="phone_number" style="border-bottom-width: 3px;">
                </div>
                <div class="form-group">
                    @if ($errors->has('message'))
                        <div class="text-red">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                    <textarea name="message" placeholder="{{ __('pages/general.contact_field_message') }}" style="border-bottom-width: 3px; height: 130px;"></textarea>
                </div>
                <button class="border-4 border-brown leading-none text-brown w-full mt-12 p-3 lg:p-3 2xl:p-3 pb-2 lg:pb-2 2xl:pb-2 font-semibold hover:bg-brown hover:text-white">{{ __('pages/general.contact_button') }}</button>
                <!-- Success message -->
                @if(Session::has('success'))
                    <p class="text-green-light mt-2">{{ __('pages/contact.success') }}</p>
                @endif

                @if(Session::has('fail'))
                    <p class="text-red mt-2">{{ __('pages/contact.fail') }}</p>
                @endif
            </form>
            <div>
                <h3 class="text-brown text-3xl font-semibold">{{ __('pages/general.contact_end') }}</h3>
                <p class="mt-7 text-brown-light">Andrea Mengelberg</p>
                <p class="mt-5 -mb-1 text-brown-light">+31 6 149 285 01</p>
                <a class="text-brown-light" href="mailto:info@and-dreamers.com?subject=I%20would%20like%20to%20get%20in%20touch">info@and-dreamers.com</a>
            </div>
        </div>
    </div>
@endsection
