@extends('website.layouts.menu_and_footer')

@section('title', 'About')

@section('content')
    <div class="md:px-28 mt-32">
        <section>
            <div class="px-8 md:px-24 leading-tight">
                <h1 class="text-5xl md:text-10xl italic font-bold text-black">and.dreamers</h1>
                <h2 class="text-brown font-light text-lg md:text-3xl">{{ __('pages/about.sub_title') }}</h2>
            </div>
            <img class="pl-8 md:px-12 mt-5" style="width: 100%; max-height: 40rem; object-fit: cover" src="{{ asset('images/about-head.jpg') }}" alt="Background image">
        </section>
        <section class="grid grid-cols-2 gap-32">
            <div class="relative px-20 py-20 -mt-20 md:-mt-88" style="background-color: rgba(250,250,250,0.85);">
                <h3 class="text-5xl italic text-brown">{{ __('pages/about.b_1_title') }}</h3>
                <p class="text-brown text-lg mt-20">{{ __('pages/about.b_1_p_1') }}</p>
                <p class="text-brown text-lg mt-5">{{ __('pages/about.b_1_p_2') }}</p>
                <p class="text-brown text-lg mt-5">
                    {{ __('pages/about.b_1_p_3_1') }}
                    <br/>
                    {{ __('pages/about.b_1_p_3_2') }}
                </p>
            </div>
            <div class="py-20 pl-24" style="background-color: rgba(250,250,250,1);">
                <div class="w-3/4">
                    <h3 class="italic font-light text-5xl text-brown" style="line-height: 3.5rem;">{{ __('pages/about.b_2_title') }}</h3>
                    <p class="text-brown text-lg mt-5">{{ __('pages/about.b_2_p_1') }}</p>
                </div>

            </div>
        </section>
        <section class="mt-10 mb-28 grid gap-20" style="grid-template-columns: 60% 1fr">
            <div class="relative overflow-hidden" style="box-shadow: 0px 3px 6px #00000029;">
                <img class="w-full object-cover" src="{{ asset('images/about-hoed.jpeg') }}" alt="" style="height: 625px;">
                <div class="absolute left-0 top-0 right-0 bottom-0" style="background-color: rgba(255,255,255,0.3)">
                    <div class="absolute top-7 left-8 bg-lightbrown rounded-full w-40">
                        <img src="{{ asset('images/logo.svg') }}" alt="And Dreamers logo">
                    </div>

                </div>
            </div>
            <div class="flex flex-col justify-end w-3/4">
                <h4 class="font-bold text-brown text-2xl">{{ __('pages/about.b_3_title') }}</h4>
                <div class="mt-5">
                    <h5 class="font-bold text-brown text-lg">{{ __('pages/about.b_3_p_1_title') }}</h5>
                    <p class="text-brown text-lg">{{ __('pages/about.b_3_p_1') }}</p>
                </div>
                <div class="mt-5">
                    <h5 class="font-bold text-brown text-lg">{{ __('pages/about.b_3_p_2_title') }}</h5>
                    <p class="text-brown text-lg">{{ __('pages/about.b_3_p_2') }}</p>
                </div>
                <div class="mt-5">
                    <h5 class="font-bold text-brown text-lg">{{ __('pages/about.b_3_p_3_title') }}</h5>
                    <p class="text-brown text-lg">{{ __('pages/about.b_3_p_3') }}</p>
                </div>
            </div>
        </section>
    </div>

@endsection
