@extends('dashboard.layouts.dashboard-inside')

@section('content')

    <!-- Overflow X hidden for mobile -->
    <div class="overflow-x-hidden">
        <!-- Background Images -->
        <img class="absolute lg:w-big lg:-ml-380px lg:-mt-750px md:-ml-96 -ml-52 mt-20" src="{{ URL::asset('images/cirkel.svg') }}" alt="">
        <img class="absolute w-small -right-52 xl:mt-52 mt-500px hidden 2xl:block" src="{{ URL::asset('images/solid_cirkel.svg') }}" alt="">

        <!-- Errors -->
        @if ($errors->all())
            <div class="fixed top-10 z-50 flex w-full justify-center">
                <ul class="removeAfter text-xl bg-white rounded-2xl list-disc text-red" style="padding: 15px 25px; box-shadow: 0 3px 6px #00000029;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <!-- Content Grid -->
        <div class="pt-16 relative text-brown">
            <!-- Left Menu -->
            <div class="text-brown md:pl-10 md:fixed h-full grid md:w-auto w-full z-50" style="grid-template-columns: auto">
                <!-- Top Left Menu -->
                <div class="pl-10 md:pl-0 z-50 md:pb-0 pb-10">
                    <p class="text-3xl italic pb-6">New hat</p>
                </div>

                <!-- Bottom Left Menu -->
                <div class="flex md:flex-col flex-row md:justify-end md:items-start md:mb-20 md:static justify-center items-end md:pb-0 z-50 fixed bottom-0 w-full md:w-auto md:pt-0 pt-6 md:bg-transparent bg-white">
                    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipProfile menuOne" href="{{ route('profile.show') }}">
                        <img src="{{ URL::asset('images/profile.svg') }}" alt="Profile" class="mb-2 ml-0.5 menuOne-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">Change your username, password, 2fa or email</span>
                    </a>
                    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-brown text-center flex items-center justify-center mb-5 hover:bg-lightbrown tooltipHat menuTwo" href="{{ route('hatstories.index') }}">
                        <img src="{{ URL::asset('images/hoed-wit.svg') }}" alt="Hat stories" class="menuTwo-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">View your hats here. Add, remove or edit them</span>
                    </a>
                    <a class="mr-5 md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipHome menuThree" href="/">
                        <img src="{{ URL::asset('images/home.svg') }}" alt="Home" class="mb-2 menuThree-image md:w-12 md:h-12 w-10 h-10">
                        <span class="tooltiptext hidden md:block">Go to the homepage</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="md:w-16 w-12 md:h-16 h-12 rounded-full bg-white-light text-center flex items-center justify-center mb-5 hover:bg-brown tooltipLogout menuFour" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <img src="{{ URL::asset('images/logout.svg') }}" alt="Logout" class="menuFour-image md:w-12 md:h-12 w-10 h-10">
                            <span class="tooltiptext hidden md:block">Click to logout</span>
                        </a>
                    </form>
                </div>
            </div>

            <!-- Add hat -->
            <div class="md:pl-64">
                <!-- Open Form -->
                <form method="post" action="{{ route('hatstories.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="grid xl:grid-cols-3 xl:grid-rows-3 gap-7 md:pr-10 justify-self-center m-4 md:m-0" style="grid-auto-flow: row;">
                            <!-- Hat Name & Text -->
                            <div class="flex flex-col bg-lightbrown relative md:mb-20 mb-5 md:p-20 p-10" style="height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute" style="top: -18px; left: 30px;">BOOK</p>
                                <label class="text-2xl" for="hat_name">NAME</label>
                                <input type="text" name="hat_name" placeholder="Hat name" class="mb-6 bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown" required>
                                <label class="text-2xl" for="hat_text">TEXT</label>
                                <textarea name="hat_text" rows="5" placeholder="Write a short summary about the hat" class="bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown resize-none" required></textarea>
                            </div>

                            <!-- Hat Image -->
                            <div class="bg-white cursor-pointer relative" style="border: 11px solid #D5C1B8; height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute z-30" style="top: -29px; left: 30px;">IMAGE</p>
                                <div class="customFileInput h-full relative flex flex-col justify-center items-center" onclick="document.getElementById('upfile1').click();">
                                    <img id="output1" src="" alt="" class="absolute z-20 h-full w-full hidden object-cover overflow-hidden">
                                    <i class="far fa-image text-10xl"></i>
                                    <p class="text-brown-light">Choose your photo</p>
                                </div>
                                <div style='height: 0; width: 0; overflow:hidden;'>
                                    <label class="hidden" for="hat_image">IMAGE</label>
                                    <input id="upfile1" type="file" value="upload" name="hat_image" onchange="sub(this); loadFile1(event)" required>
                                </div>
                            </div>

                            <!-- Hat Specifications -->
                            <div class="flex flex-col bg-lightbrown relative md:mb-20 mb-5 md:p-20 p-10" style="height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute" style="top: -18px; left: 30px;">SPECS</p>
                                <label class="text-2xl" for="hat_size">SIZE</label>
                                <input type="text" name="hat_size" placeholder="Hat size" class="mb-6 bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown" required>
                                <label class="text-2xl" for="hat_color">COLOR</label>
                                <input type="text" name="hat_color" placeholder="Hat color" class="mb-6 bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown" required>
                                <label class="text-2xl" for="hat_material">MATERIAL</label>
                                <input type="text" name="hat_material" placeholder="Hat material" class="bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown" required>
                            </div>

                            <!-- Page 1 Text -->
                            <div class="flex flex-col bg-lightbrown relative justify-center md:mb-20 mb-5 md:p-20 p-10" style="height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute" style="top: -18px; left: 30px;">PAGE ONE</p>
                                <label class="text-2xl" for="hat_pageone_text">TEXT</label>
                                <textarea name="hat_pageone_text" rows="5" placeholder="Page one text" class="bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown resize-none" required></textarea>
                            </div>

                            <!-- Page 1 Image -->
                            <div class="bg-white cursor-pointer relative" style="border: 11px solid #D5C1B8; height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute z-30" style="top: -29px; left: 30px;">IMAGE</p>
                                <div class="customFileInput h-full relative flex flex-col justify-center items-center" onclick="document.getElementById('upfile2').click();">
                                    <img id="output2" src="" alt="" class="absolute z-20 h-full w-full hidden object-cover overflow-hidden">
                                    <i class="far fa-image text-10xl"></i>
                                    <p class="text-brown-light">Choose your photo</p>
                                </div>
                                <div style='height: 0; width: 0; overflow:hidden;'>
                                    <label class="hidden" for="hat_pageone_image">IMAGE</label>
                                    <input id="upfile2" type="file" value="upload" name="hat_pageone_image" onchange="sub(this); loadFile2(event)" required>
                                </div>
                            </div>

                            <div></div>

                            <!-- Page 2 Text -->
                            <div class="flex flex-col bg-lightbrown relative justify-center md:mb-20 mb-5 md:p-20 p-10" style="height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute" style="top: -18px; left: 30px;">PAGE TWO</p>
                                <label class="text-2xl" for="hat_pagetwo_text">TEXT</label>
                                <textarea name="hat_pagetwo_text" rows="5" placeholder="Page two text" class="bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown resize-none" required></textarea>
                            </div>

                            <!-- Page 2 Images -->
                            <div class="bg-white cursor-pointer relative" style="border: 11px solid #D5C1B8; height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute z-30" style="top: -29px; left: 30px;">IMAGE</p>
                                <div class="customFileInput h-full relative flex flex-col justify-center items-center" onclick=" document.getElementById('upfile3').click();">
                                    <img id="output3" src="" alt="" class="absolute z-20 w-full h-full hidden object-cover overflow-hidden">
                                    <i class="far fa-image text-10xl"></i>
                                    <p class="text-brown-light">Choose your photo</p>
                                </div>
                                <div style='height: 0; width: 0; overflow:hidden;'>
                                    <label class="hidden" for="hat_pagetwo_imageone">IMAGE</label>
                                    <input id="upfile3" type="file" value="upload" name="hat_pagetwo_imageone" onchange="sub(this); loadFile3(event)" required>
                                </div>
                            </div>

                            <div class="bg-white cursor-pointer relative" style="border: 11px solid #D5C1B8; height: 100%; max-height: 500px; max-width: 526px;">
                                <p class="text-4xl sm:text-5xl absolute z-30" style="top: -29px; left: 30px;">IMAGE</p>
                                <div class="customFileInput h-full relative flex flex-col justify-center items-center" onclick="document.getElementById('upfile4').click();">
                                    <img id="output4" src="" alt="" class="absolute z-20 w-full h-full hidden object-cover overflow-hidden">
                                    <i class="far fa-image text-10xl"></i>
                                    <p class="text-brown-light">Choose your photo</p>
                                </div>
                                <div style='height: 0; width: 0; overflow:hidden;'>
                                    <label class="hidden" for="hat_pagetwo_imagetwo">IMAGE</label>
                                    <input id="upfile4" type="file" value="upload" name="hat_pagetwo_imagetwo" onchange="sub(this); loadFile4(event)" required>
                                </div>
                            </div>
                            <div></div>
                            <!-- Button -->
                            <div class="pt-12 md:pb-12 pb-28 w-full text-center">
                                <button class="border-4 border-brown text-2xl w-full pb-2 pt-4 bg-white hover:bg-brown hover:text-white">SAVE</button>
                            </div>
                            <div></div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('.menuOne').hover(
                function(){$(this).children('.menuOne-image').attr('src', '{{ URL::asset('images/profile-wit.svg') }}')},
                function(){$(this).children('.menuOne-image').attr('src', '{{ URL::asset('images/profile.svg') }}')}
            );
            $('.menuTwo').hover(
                function(){$(this).children('.menuTwo-image').attr('src', '{{ URL::asset('images/hoed.svg') }}')},
                function(){$(this).children('.menuTwo-image').attr('src', '{{ URL::asset('images/hoed-wit.svg') }}')}
            );
            $('.menuThree').hover(
                function(){$(this).children('.menuThree-image').attr('src', '{{ URL::asset('images/home-wit.svg') }}')},
                function(){$(this).children('.menuThree-image').attr('src', '{{ URL::asset('images/home.svg') }}')}
            );
            $('.menuFour').hover(
                function(){$(this).children('.menuFour-image').attr('src', '{{ URL::asset('images/logout-wit.svg') }}')},
                function(){$(this).children('.menuFour-image').attr('src', '{{ URL::asset('images/logout.svg') }}')}
            );

            setTimeout(function(){
                $('.removeAfter').fadeOut();
            }, 5000);
        });

        var loadFile1 = function(event) {
            var output1 = document.getElementById('output1');
            output1.src = URL.createObjectURL(event.target.files[0]);
            output1.onload = function() {
                URL.revokeObjectURL(output1.src)
            }
        };
        var loadFile2 = function(event) {
            var output2 = document.getElementById('output2');
            output2.src = URL.createObjectURL(event.target.files[0]);
            output2.onload = function() {
                URL.revokeObjectURL(output2.src)
            }
        };
        var loadFile3 = function(event) {
            var output3 = document.getElementById('output3');
            output3.src = URL.createObjectURL(event.target.files[0]);
            output3.onload = function() {
                URL.revokeObjectURL(output3.src)
            }
        };
        var loadFile4 = function(event) {
            var output4 = document.getElementById('output4');
            output4.src = URL.createObjectURL(event.target.files[0]);
            output4.onload = function() {
                URL.revokeObjectURL(output4.src)
            }
        };

        function sub(obj) {
            obj.value;
        }
    </script>

    <script src="{{ mix('js/dashboard/edit-create.js') }}"></script>

@endsection
