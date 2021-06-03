@extends('website.layouts.menu_and_footer')

@section('title', 'About')

@section('content')
    <div class="px-28 mt-32">
        <section>
            <div class="px-24 leading-tight">
                <h1 class="text-10xl italic font-bold text-black">and.dreamers</h1>
                <h2 class="text-brown font-light text-3xl">About page</h2>
            </div>
            <img class="px-12 mt-5" style="width: 100%; max-height: 40rem; object-fit: cover" src="{{ asset('images/about-head.jpg') }}" alt="Background image">
        </section>
        <section class="grid grid-cols-2 gap-32">
            <div class="relative px-20 py-20" style="background-color: rgba(250,250,250,0.85); margin-top: -22rem;">
                <h3 class="text-5xl italic text-brown">How a opportunity can change your life</h3>
                <p class="text-brown text-lg mt-20">When studying Fashion at the Gerrit Rietveld Academie in Amsterdam I had the opportunity to
                    apprentice at Philippe Model who at that time had a hat atelier in Sens.</p>
                <p class="text-brown text-lg mt-5">
                    I remember the excitement
                    and anticipation during the hour train ride from Gare de Lyon to Sens. I was picked up from the
                    local train station by one of the friendly millinery staff to drive to the hat atelier while
                    discussing the work for the day. Being able to apprentice there even just for one month was an
                    amazing experience.
                </p>
                <p class="text-brown text-lg mt-5">
                    I still remember the distinct smell of steamed wool blankets coming from the big
                    felt steam closet called the “Vapeur” and the sounds of the machinery used to finish the hats
                    ongoing. I made myself the promise back then to return to millinery when the time would be right.
                    <br/>By
                    chance my situation changed early 2019 and I finally found the time to go back to millinery. I
                    started taking workshops with two experienced and all-round millinery tutors and it felt like coming
                    home. This was the beginning of and.dreamers hat stories.
                </p>
            </div>
            <div class="py-20 pl-24" style="background-color: rgba(250,250,250,1);">
                <div class="w-3/4">
                    <h3 class="italic font-light text-5xl text-brown" style="line-height: 3.5rem;">Designs with a message of sustainability</h3>
                    <p class="text-brown text-lg mt-5">I work with sustainable and existing materials such as stripped and properly cleaned fleamarket
                        finds, b-quality and deadstock materials or materials that are sustainably made. This is one of the
                        reasons why my hats are always one of a kind. When studying sustainable practices I found the
                        circular concept to lease or rent items instead of buying very interesting. Especially for hats, as
                        often these are used for special occasions and then end up catching dust on top of a closet. That is
                        why I added leasing or renting as an additional option to promote circularity.</p>
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
                <h4 class="font-bold text-brown text-2xl">HOW I WANT TO PROMOTE CIRCULARITY.</h4>
                <div class="mt-5">
                    <h5 class="font-bold text-brown text-lg">Buy a hat</h5>
                    <p class="text-brown text-lg">Order a bespoke hat in your size or purchase an existing hat knowing that you will treasure it.
                        When one day you are done with your hat return it and get 10% off any new purchase, so the hat
                        can be recycled instead of ending up in landfills.</p>
                </div>
                <div class="mt-5">
                    <h5 class="font-bold text-brown text-lg">Lease a hat</h5>
                    <p class="text-brown text-lg">For an annual amount you can lease a hat. You pay an annual fee to get a new hat after one year,
                        after returning the old one to re-use or recycle.</p>
                </div>
                <div class="mt-5">
                    <h5 class="font-bold text-brown text-lg">Rent a hat</h5>
                    <p class="text-brown text-lg">For a set amount depending on the purchase value of the hat you can rent a hat for a day, return
                        it in good condition or pay a cleaning/repair charge.</p>
                </div>
            </div>
        </section>
    </div>

@endsection
