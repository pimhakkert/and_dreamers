@extends('website.layouts.website')

@section('title', 'Hat story')

@section('content')
<div class="p-5 xl:p-20">
    <div class="p-3 py-4 sm:p-5 bg-lightbrown max-w-7xl">
        <div class="w-full">
            <div id="hatstory">
                <div class="page-group">
                    <div class="hatstory-page bg-brown">
                        <h1>{{ $hatStory->hat_name }}</h1>
                        <h2>And.dreamers</h2>
                        <img src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="Image of this hat">
                        <h4>Let's take a look inside</h4>
                        <button class="hatstory-next">OPEN BOOK</button>
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-white" data-density="soft">
                        <h3>{{ $hatStory->hat_name }}</h3>
                        <p>"{{ $hatStory->hat_text }}"</p>
                        <div>
                            <p>Specifications</p>
                            <div>
                                <p>Size</p>
                                <p>{{ $hatStory->hat_size }}</p>
                                <p>Color</p>
                                <p>{{ $hatStory->hat_color }}</p>
                                <p>Material</p>
                                <p>{{ $hatStory->hat_material }}</p>
                            </div>

                        </div>

                        <button class="hatstory-previous">Previous</button>
                    </div>
                    <div class="hatstory-page bg-white" data-density="soft">
                        <button class="hatstory-next">Next</button>
                        <img src="/storage/hatimage/{{ $hatStory->hat_image }}" alt="">
                    </div>
                </div>
                <div class="page-group">
                    <div class="hatstory-page bg-white" data-density="soft">
                        <button class="hatstory-previous">Previous</button>
                        <p>{{ $hatStory->hat_pageone_text }}</p>
                        <img src="/storage/hatimage/{{ $hatStory->hat_pageone_image }}" alt="">
                    </div>
                    <div class="hatstory-page bg-white" data-density="soft">
                        <p>{{ $hatStory->hat_pagetwo_text }}</p>
                        <div>
                            <img src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imageone }}" alt="">
                            <img src="/storage/hatimage/{{ $hatStory->hat_pagetwo_imagetwo }}" alt="">
                        </div>
                        <button class="hatstory-next">Next</button>
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
