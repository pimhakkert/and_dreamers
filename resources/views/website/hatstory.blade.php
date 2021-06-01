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
                            <h1 class="italic text-4xl text-center mt-20">{{ $hatStory->hat_name }}</h1>
                            <h2 class="font-thin text-3xl text-center mt-2">And.dreamers</h2>
                            <img class="w-60 h-60 object-cover rounded-full border-brown border-2 mt-10" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="Image of this hat">
                            <h4 class="text-2xl italic text-center mt-10">Let's take a look inside</h4>
                            <button class="text-3xl font-bold mt-6 group-hover:text-brown">OPEN BOOK</button>
                        </div>
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-lightbrown py-7 pl-7" data-density="soft">
                        <div class="relative bg-white h-full" style="box-shadow: -3px 0px 13px 1px rgba(0,0,0,0.41);">
                            <button class="hatstory-previous hatstory-previous-desktop"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                            <div class="pl-14 pt-10 z-10 h-full flex flex-col" style="border-right: 1px solid #888;">
                                <div>
                                    <h3 class="inline-block border-b-4 border-hoverbrown text-hoverbrown italic font-normal text-2xl mt-10">{{ $hatStory->hat_name }}</h3>
                                    <p class="text-brown mt-8 text-xl" style="max-width: 90%">"{{ $hatStory->hat_text }}"</p>
                                </div>
                                <div class="flex-1 flex flex-col justify-center">
                                    <p class="text-brown">Specifications</p>
                                    <div class="specs-grid grid mt-3" style="grid-template-columns: auto 1fr; width: max-content">
                                        <p class="text-brown mr-6">Size</p>
                                        <p class="text-brown mr-2">{{ $hatStory->hat_size }}</p>
                                        <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                        <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                        <p class="text-brown mr-6">Color</p>
                                        <p class="text-brown mr-2">{{ $hatStory->hat_color }}</p>
                                        <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                        <div class="border-b-2 border-lightbrown mt-1 mb-2"></div>
                                        <p class="text-brown mr-6">Material</p>
                                        <p class="text-brown mr-2">{{ $hatStory->hat_material }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hatstory-page bg-lightbrown py-7 pr-7" data-density="soft">
                        <div class="relative bg-white h-full overflow-y-hidden" style="box-shadow: 3px 0px 13px 1px rgba(0,0,0,0.41);">
                            <button class="hatstory-next hatstory-next-desktop"><img style="" src="{{ asset('images/next.svg') }}" alt="Next page"></button>
                            <div class="flex justify-center items-center h-full" style="border-left: 1px solid #888;">
                                <img class="object-cover h-full" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-lightbrown py-7 pl-7" data-density="soft">
                        <div class="relative bg-white h-full" style="box-shadow: -3px 0px 13px 1px rgba(0,0,0,0.41);">
                            <button class="hatstory-previous hatstory-previous-desktop"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                            <div class="px-14 pt-32 pb-24 z-10 h-full flex flex-col justify-end" style="border-right: 1px solid #888;">
                                <div class="h-full flex flex-col justify-between">
                                    <p class="text-brown text-xl">"{{ $hatStory->hat_pageone_text }}"</p>
                                    <img class="max-h-60 object-cover" src="/storage/hatimage/{{ $hatStory->hat_pageone_image }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="hatstory-page bg-lightbrown py-7 pr-7" data-density="soft">
                        <div class="relative bg-white h-full" style="box-shadow: 3px 0px 13px 1px rgba(0,0,0,0.41);">
                            <button class="hatstory-next hatstory-next-desktop"><img style="" src="{{ asset('images/next.svg') }}" alt="Next page"></button>
                            <div class="pl-14 pr-10 pt-32 pb-24 z-10 h-full flex flex-col justify-end" style="border-left: 1px solid #888;">
                                <div class="h-full flex flex-col justify-between">
                                    <div class="grid grid-cols-2 gap-5 h-full">
                                        <img class="object-cover object-center h-full w-full" src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imageone }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                                        <img class="object-cover object-center h-full w-full" src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imagetwo }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                                    </div>
                                    <p class="text-brown text-xl mt-10">"{{ $hatStory->hat_pagetwo_text }}"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-lightbrown py-7 pl-7" data-density="soft">
                        <div class="relative bg-white h-full" style="box-shadow: -3px 0px 13px 1px rgba(0,0,0,0.41);">
                            <button class="hatstory-previous hatstory-previous-desktop"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                            <div class="px-14 pb-12 z-10 h-full flex flex-col justify-end" style="border-right: 1px solid #888;">
                                <p class="text-brown text-xl">"This hat is available for rent. You can rent the hat for an agreed period."</p>
                                <form class="w-7/12 mt-5">
                                    <h3 class="text-brown text-2xl font-semibold -mb-10">CONTACT</h3>
                                    <div class="form-group -mb-10">
                                        <input type="text" placeholder="NAME" name="name" style="border-bottom-width: 3px;">
                                    </div>
                                    <div class="form-group -mb-10">
                                        <input type="text" placeholder="PHONE NUMBER" name="phone_number" style="border-bottom-width: 3px;">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="MESSAGE" style="border-bottom-width: 3px; height: 130px;"></textarea>
                                    </div>
                                    <button type="button" class="border-4 border-brown leading-none text-brown w-full mt-5 p-2 lg:p-3 2xl:p-3 pb-1 lg:pb-2 2xl:pb-2 font-semibold hover:bg-brown hover:text-white">SEND</button>
                                </form>
                                <p id="sending" class="hidden mt-2">Sending message...</p>
                                <p id="error" class="hidden text-red-light mt-2">Something went wrong! Try again.</p>
                                <p id="success" class="hidden text-green-light mt-2">Message has been sent!</p>
                            </div>
                        </div>
                    </div>
                    <div class="hatstory-page bg-lightbrown py-7 pr-7" data-density="soft">
                        <div class="relative bg-white h-full" style="box-shadow: 3px 0px 13px 1px rgba(0,0,0,0.41);">
                            <button class="hatstory-next hatstory-next-desktop"><img style="" src="{{ asset('images/next.svg') }}" alt="Next page"></button>
                            <div class="w-full h-full py-12 p-5 flex-col flex h-full justify-center" style="border-left: 1px solid #888;">
                                <img class="h-full object-cover" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="" style="box-shadow: 4px 1px 16px -2px rgba(0,0,0,0.42);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-white relative z-10">
                        <button class="hatstory-previous hatstory-previous-desktop"><img style="" src="{{ asset('images/next.svg') }}" alt="Previous page"></button>
                        <div class="group h-full flex flex-col justify-between items-center back cursor-pointer pt-20 pb-28">
                            <div>
                                <h3 class="font-thin text-3xl text-center">Handmade by</h3>
                                <h2 class="italic text-4xl text-center mt-2">And.dreamers</h2>
                            </div>
                            <div>
                                <h4 class="italic text-3xl text-center mb-8">End of story</h4>
                                <a href="#" class="text-brown text-3xl font-bold">GO TO LIBRARY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav flex sm:hidden">
        <button id="mobile-prev" aria-label="Go to previous page">
            <img src="{{ asset('images/next.svg') }}" alt="Previous page">
        </button>
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
        overflow: hidden;
        height: 100vh;
    }

    body::before {
        z-index: -1;
        position: absolute;
        width: 90%;
        padding-top: 100%;
        content: '';
        border-radius: 50%;
        background-color: #FAFAFA;

        left: 50%;
        top: 50%;

        transform: translate(-50%,-50%);
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
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
{{--    <script src="{{ mix('js/website/page-flip.js') }}"></script>--}}
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
                    console.log(response);

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
