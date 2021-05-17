@extends('website.layouts.website')

@section('title', 'Hat story')

@section('content')
<div class="p-5 xl:p-20">
    <div class="p-5 bg-lightbrown max-w-7xl">
        <div class="w-full">
            <div id="hatstory">
                <div class="hatstory-page bg-brown">
                    <button class="hatstory-next">Next</button>
                </div>
                <div class="hatstory-page bg-white">
                    <button class="hatstory-previous">Previous</button>
                </div>
                <div class="hatstory-page bg-white">
                    <button class="hatstory-next">Next</button>
                </div>
                <div class="hatstory-page bg-white">
                    <button class="hatstory-previous">Previous</button>
                </div>
            </div>
        </div>
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
</style>
@endsection

@section('js')
    <script src="{{ mix('js/website/hatstory.js') }}"></script>
@endsection
