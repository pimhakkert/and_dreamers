@extends('website.layouts.website')

@section('title', 'Hat story')

@section('content')
<div class="p-5 xl:p-20 bg-lightbrown-light">
    <div class="max-w-5xl ml-auto mr-auto">
        <div class="w-full">
            <div id="hatstory">
                <div class="page-group">
                    <div class="hatstory-page">
                        <div class="bg-lightbrown h-full flex flex-col items-center">
                            <h1 class="italic text-4xl text-center mt-20">{{ $hatStory->hat_name }}</h1>
                            <h2 class="font-thin text-3xl text-center mt-2">And.dreamers</h2>
                            <img class="w-60 h-60 object-cover rounded-full border-brown border-2 mt-10" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="Image of this hat">
                            <h4 class="text-2xl italic text-center mt-10">Let's take a look inside</h4>
                            <button class="hatstory-next text-3xl font-bold mt-6 hover:text-brown">OPEN BOOK</button>
                        </div>

                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-white relative z-10" data-density="soft">
                        <button class="hatstory-previous absolute top-5 left-5 text-brown">Previous</button>
                        <div class="pl-16 pt-10 z-10 h-full flex flex-col" style="border-right: 1px solid #888;">
                            <div>
                                <h3 class="inline-block border-b-4 border-hoverbrown text-hoverbrown italic font-normal text-2xl mt-10">{{ $hatStory->hat_name }}</h3>
                                <p class="text-brown mt-8" style="max-width: 90%">"{{ $hatStory->hat_text }}"</p>
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
                    <div class="hatstory-page bg-white relative text-brown overflow-y-hidden" data-density="soft">
                        <div class="flex justify-center items-center max-h-full" style="border-left: 1px solid #888;">
                            <button class="hatstory-next absolute top-5 right-5 z-10">Next</button>
                            <img class="object-cover" src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-white" data-density="soft">
                        <button class="hatstory-previous">Previous</button>
                        <p>{{ $hatStory->hat_pageone_text }}</p>
                        <img src="/storage/hatimage/{{ $hatStory->hat_pageone_image }}" alt="">
                    </div>
                    <div class="hatstory-page bg-white" data-density="soft">
                        <button class="hatstory-next">Next</button>
                        <p>{{ $hatStory->hat_pagetwo_text }}</p>
                        <div>
                            <img src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imageone }}" alt="">
                            <img src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imagetwo }}" alt="">
                        </div>

                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-white" data-density="soft">
                        <button class="hatstory-previous">Previous</button>
                        <p>"This hat is available for rent. You can rent the hat for an agreed period."</p>
                        <form action="">
                            <h3>CONTACT</h3>
                            <input type="text" placeholder="NAME">
                            <input type="text" placeholder="PHONE NUMBER">
                            <input type="text" placeholder="MESSAGE">
                            <button>SEND</button>
                        </form>
                    </div>
                    <div class="hatstory-page bg-white" data-density="soft">
                        <img src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="">
                        <button class="hatstory-next">Next</button>
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-brown">
                        <button class="hatstory-previous">Previous</button>
                        <h3>Handmade by</h3>
                        <h2>And.dreamers</h2>

                        <h4>End of story</h4>
                        <a href="#">GO TO LIBRARY</a>
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
    body {
        position: relative;
    }

    body::before {
        z-index: -1;
        position: absolute;
        width: 90%;
        padding-top: 100%;
        /*content: '';*/
        border-radius: 50%;
        background-color: #FAFAFA;

        left: 50%;
        top: 50%;

        transform: translate(-50%,-50%);
    }

    .mobile-nav img {
        width: 50px;
        height: 50px;
    }

    #mobile-prev img {
        transform: scaleX(-1);
    }
</style>
@endsection

@section('js')
{{--    <script src="{{ mix('js/website/page-flip.js') }}"></script>--}}
    <script src="{{ mix('js/website/hatstory.js') }}"></script>
@endsection
