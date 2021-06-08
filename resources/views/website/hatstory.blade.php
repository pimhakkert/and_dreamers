@extends('website.layouts.website')

@section('title', 'Hat story')

@section('content')
    <div class="p-5 xl:p-20 h-full">
        <div class="max-w-5xl m-auto">
            <div class="w-full">
                <div id="hatstory">
                    <div class="page-group">
                        <div class="hatstory-page">
                            <div class="hatstory-next group h-full flex flex-col items-center cover cursor-pointer">
                                <h1 class="italic text-2xl md:text-4xl text-brown md:text-black-black text-center mt-16 md:mt-20">{{ $hatStory->hat_name }}</h1>
                                <h2 class="font-thin text-xl md:text-3xl text-brown md:text-black-black text-center md:mt-2">And.dreamers</h2>
                                <img class="w-36 md:w-60 h-36 md:h-60 object-cover rounded-full border-brown md:border-2 mt-6 md:mt-10" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="Image of this hat">
                                <h4 class="text-lg text-brown md:text-black-black md:text-2xl italic text-center mt-6 md:mt-10">{{ __('pages/hatstory.catch_phrase') }}</h4>
                                <button class="bg-brown md:bg-transparent px-14 pt-3 pb-2 text-white md:text-black-black text-lg md:text-3xl font-bold mt-3 md:mt-6 md:group-hover:text-brown">{{ __('pages/hatstory.open_book') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="page-group">
                        <div class="hatstory-page shadow-sm md:shadow-2xl bg-lightbrown py-4 px-3 md:py-7 md:pl-7 md:pr-0" data-density="soft">
                            <div class="relative bg-white h-full" style="box-shadow: -3px 0px 13px 1px rgba(0,0,0,0.41);">
                                <button class="hatstory-previous hatstory-previous-desktop hidden sm:block"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                                <div class="pl-10 md:pl-14 pt-10 z-10 h-full flex flex-col" style="border-right: 1px solid #888;">
                                    <div>
                                        <h3 class="inline-block border-b-2 md:border-b-4 border-hoverbrown text-hoverbrown italic font-normal text-xl md:text-2xl mt-0 md:mt-10">{{ $hatStory->hat_name }}</h3>
                                        <p class="text-brown mt-8 md:text-xl" style="max-width: 90%">"{{ $hatStory->hat_text }}"</p>
                                    </div>
                                    <div class="flex-1 flex flex-col justify-center">
                                        <p class="text-brown">{{ __('pages/hatstory.specifications') }}</p>
                                        <div class="specs-grid grid mt-3" style="grid-template-columns: auto 1fr; width: max-content">
                                            <p class="text-brown mr-6">{{ __('pages/hatstory.size') }}</p>
                                            <p class="text-brown mr-2">{{ $hatStory->hat_size }}</p>
                                            <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                            <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                            <p class="text-brown mr-6">{{ __('pages/hatstory.color') }}</p>
                                            <p class="text-brown mr-2">{{ $hatStory->hat_color }}</p>
                                            <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                            <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                            <p class="text-brown mr-6">{{ __('pages/hatstory.material') }}</p>
                                            <p class="text-brown mr-2">{{ $hatStory->hat_material }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hatstory-page shadow-sm md:shadow-2xl bg-lightbrown py-4 px-3 md:py-7 md:pl-0 md:pr-7" data-density="soft">
                            <div class="relative bg-white h-full overflow-y-hidden" style="box-shadow: 3px 0px 13px 1px rgba(0,0,0,0.41);">
                                <button class="hatstory-next hatstory-next-desktop hidden sm:block"><img style="" src="{{ asset('images/next.svg') }}" alt="Next page"></button>
                                <div class="flex justify-center items-center h-full" style="border-left: 1px solid #888;">
                                    <img class="object-cover h-full" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-group">
                        <div class="hatstory-page shadow-sm md:shadow-2xl bg-lightbrown py-4 px-3 md:py-7 md:pl-7 md:pr-0" data-density="soft">
                            <div class="relative bg-white h-full" style="box-shadow: -3px 0px 13px 1px rgba(0,0,0,0.41);">
                                <button class="hatstory-previous hatstory-previous-desktop hidden sm:block"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                                <div class="px-8 md:px-14 pt-14 md:pt-32 pb-10 md:pb-24 z-10 h-full flex flex-col justify-end" style="border-right: 1px solid #888;">
                                    <div class="h-full flex flex-col justify-between">
                                        <p class="text-brown md:text-xl">"{{ $hatStory->hat_pageone_text }}"</p>
                                        <img class="max-h-36 md:max-h-60 object-cover" src="/storage/hatimage/{{ $hatStory->hat_pageone_image }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="hatstory-page shadow-sm md:shadow-2xl bg-lightbrown py-4 px-3 md:py-7 md:pl-0 md:pr-7" data-density="soft">
                            <div class="relative bg-white h-full" style="box-shadow: 3px 0px 13px 1px rgba(0,0,0,0.41);">
                                <button class="hatstory-next hatstory-next-desktop hidden sm:block"><img style="" src="{{ asset('images/next.svg') }}" alt="Next page"></button>
                                <div class="pl-6 md:pl-14 pr-6 md:pr-14 pt-10 md:pt-32 pb-10 md:pb-24 z-10 h-full flex flex-col justify-end" style="border-left: 1px solid #888;">
                                    <div class="h-full flex flex-col justify-between">
                                        <div class="grid grid-cols-2 gap-5 md:h-full">
                                            <img class="object-cover object-center h-36 md:h-full w-full" src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imageone }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                                            <img class="object-cover object-center h-36 md:h-full w-full" src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imagetwo }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                                        </div>
                                        <p class="text-brown md:text-xl md:mt-10">"{{ $hatStory->hat_pagetwo_text }}"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-group">
                        <div class="hatstory-page shadow-sm md:shadow-2xl bg-lightbrown py-4 px-3 md:py-7 md:pl-7 md:pr-0" data-density="soft">
                            <div class="relative bg-white h-full" style="box-shadow: -3px 0px 13px 1px rgba(0,0,0,0.41);">
                                <button class="hatstory-previous hatstory-previous-desktop hidden sm:block"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                                <div class="px-6 md:px-14 pb-6 md:pb-12 z-10 h-full flex flex-col justify-end" style="border-right: 1px solid #888;">
                                    <form>
                                        <p class="text-brown md:text-xl">
                                            "{{ __('pages/hatstory.contact_in_touch1') }}
                                            <select class="border-none bg-transparent pr-7 pl-0 p-2 md:text-lg" name="type" id="type">
                                                <option class="text-md" value="purchase">{{ __('pages/hatstory.contact_in_touch_purchase') }}</option>
                                                <option class="text-md" value="lease">{{ __('pages/hatstory.contact_in_touch_lease') }}</option>
                                                <option class="text-md" value="rent">{{ __('pages/hatstory.contact_in_touch_rent') }}</option>
                                            </select>
                                            <span class="-ml-2">{{ __('pages/hatstory.contact_in_touch2') }}"</span>
                                        </p>

                                        <div class="w-7/12 mt-3 md:mt-5">
                                            <h3 class="text-brown md:text-2xl font-semibold -mb-10">CONTACT</h3>
                                            <div class="form-group -mb-7 md:-mb-10">
                                                <input type="text" placeholder="{{ __('pages/general.contact_field_name') }}" name="name" style="border-bottom-width: 3px;">
                                            </div>
                                            <div class="form-group -mb-7 md:-mb-10">
                                                <input type="text" placeholder="{{ __('pages/general.contact_field_phone') }}" name="phone_number" style="border-bottom-width: 3px;">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="h-20 md:h-40" name="message" placeholder="{{ __('pages/general.contact_field_message') }}" style="border-bottom-width: 3px;"></textarea>
                                            </div>
                                            <button type="button" class="text-xs md:text-md border-2 md:border-4 border-brown leading-none text-brown w-full mt-5 p-2 lg:p-3 2xl:p-3 pb-1 lg:pb-2 2xl:pb-2 font-semibold hover:bg-brown hover:text-white">{{ __('pages/general.contact_button') }}</button>
                                        </div>
                                    </form>
                                    <p id="sending" class="text-xs md:text-md hidden mt-2">{{ __('pages/hatstory.contact_sending') }}</p>
                                    <p id="error" class="text-xs md:text-md hidden text-red-light mt-2">{{ __('pages/hatstory.contact_error') }}</p>
                                    <p id="success" class="text-xs md:text-md hidden text-green-light mt-2">{{ __('pages/hatstory.contact_success') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="hatstory-page shadow-sm md:shadow-2xl bg-lightbrown py-4 px-3 md:py-7 md:pl-0 md:pr-7" data-density="soft">
                            <div class="relative bg-white h-full" style="box-shadow: 3px 0px 13px 1px rgba(0,0,0,0.41);">
                                <button class="hatstory-next hatstory-next-desktop hidden sm:block"><img style="" src="{{ asset('images/next.svg') }}" alt="Next page"></button>
                                <div class="w-full h-full py-12 p-5 flex-col flex h-full justify-center" style="border-left: 1px solid #888;">
                                    <img class="h-full object-cover" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-group">
                        <div class="hatstory-page bg-white relative z-10">
                            <button class="hatstory-previous hatstory-previous-desktop hidden sm:block"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                            <div class="group h-full flex flex-col justify-between items-center back cursor-pointer pt-20 pb-28">
                                <div>
                                    <h3 class="font-thin text-brown md:text-black-black text-lg md:text-3xl text-center">{{ __('pages/hatstory.handmade_by') }}</h3>
                                    <h2 class="italic text-brown md:text-black-black text-2xl md:text-4xl text-center md:mt-2">And.dreamers</h2>
                                </div>
                                <div>
                                    <h4 class="italic text-brown md:text-black-black text-lg md:text-3xl text-center mb-2 md:mb-8">{{ __('pages/hatstory.story_end') }}</h4>
                                    <a href="{{ route('hatoverview') }}" class="text-brown text-xl md:text-3xl font-bold">{{ __('pages/hatstory.go_to_library') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-nav flex justify-evenly items-center sm:hidden mt-5">
            <button id="mobile-prev" class="opacity-0 pointer-events-none" aria-label="Go to previous page">
                <img src="{{ asset('images/next.svg') }}" alt="Previous page">
            </button>
            <p id="mobile-page" class="text-brown">PAGINA <span>1</span></p>
            <button id="mobile-next" aria-label="Go to next page">
                <img src="{{ asset('images/next.svg') }}" alt="Next page">
            </button>
        </div>

    </div>
@endsection

@section('css')
<style>
    .hatstory-previous-desktop img, .hatstory-next-desktop img {
        width: 75px;
    }

    .hatstory-previous-desktop img {
        transform: scale(-1);
    }

    .hatstory-page > div {
        background-color: #f4f3f3;
    }

    body {
        position: relative;
        height: 100vh;
        background-repeat: no-repeat;
        background-position: center;
        background-image: url("{{ asset('images/background_hatstory.png') }}");
    }

    .mobile-nav img {
        width: 50px;
        height: 50px;
    }

    #mobile-prev img {
        transform: scaleX(-1);
    }

    .cover {
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('{{ asset('images/book_front.png') }}');
    }

    .back {
        background-position: 100% 50%;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('{{ asset('images/book_back.png') }}');
    }

    body.noscroll {
        overflow: hidden;
    }
</style>
@endsection

@section('js')

    <script src="{{ mix('js/website/hatstory.js') }}"></script>

    <script>
        let canSend = true;

        window.addEventListener('load', () => {
            //Contact form
            document.querySelector('form button').addEventListener('click', () => {

                if(!canSend) return;

                const sendingText = document.querySelector('#sending');
                const successText = document.querySelector('#success');
                const errorText = document.querySelector('#error');

                if(sendingText.classList.contains('hidden'))
                {
                    sendingText.classList.remove('hidden');
                }

                if(!successText.classList.contains('hidden'))
                {
                    successText.classList.add('hidden');
                }

                if(!errorText.classList.contains('hidden'))
                {
                    errorText.classList.add('hidden');
                }

                const url = "{{ route('hatStoryContact', ['id' => $hatStory->hat_id]) }}";

                //Get data from form into key value pairs
                const formData = new FormData(document.querySelector('form'));

                const options = {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                };

                fetch(url,options)
                .then(response => {
                    sendingText.classList.add('hidden');

                    if(response.ok)
                    {
                        successText.classList.remove('hidden');
                        canSend = false;

                        document.querySelector('form button').style.pointerEvents = "none";
                    }
                    else
                    {
                        errorText.classList.remove('hidden');
                    }
                })

            });
        });

    </script>
@endsection
