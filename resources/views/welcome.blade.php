<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Link Swiper's CSS -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
        />

        <!-- Demo styles -->
        <style>
            html,
            body {
                position: relative;
                height: 100%;
            }

            body {
                background: #eee;
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color: #000;
                margin: 0;
                padding: 0;
            }

            .swiper {
                width: 100%;
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .swiper-slide {
                background-position: center;
                background-size: cover;
                width: 300px;
                height: 300px;
            }

            .swiper-slide img {
                display: block;
                width: 100%;
            }
        </style>

        <link rel="stylesheet" href="{{ asset('css/int-tel-input/intlTelInput.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/int-tel-input/initialize.css') }}">

        @livewireStyles
    </head>

    <body class="">

        @livewire('images-preview', ['name' => 'Daloya'])

{{--        <livewire:images-preview />--}}
        <br>

        <livewire:counter />

        <br>
        <div class="container max-w-6xl mx-auto">
            <br>
                <form action="/test" method="POST">
                    @csrf
                    <div class="mx-auto text-center">
                        <input class="h-11 rounded-lg focus:border-blue-600 focus:ring-blue-600 focus:outline-blue-200" name="tel" type="tel" id="phone">
                        <input type="hidden" value="0" name="valid" id="valid">
                        <span id="valid-msg" class="hidden">✓ Valid</span>
                        <span id="error-msg" class="hidden"></span>
                        <button class="block mx-auto" type="submit">Submit</button>
                    </div>
                </form>
            <br>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        <p>Test</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                {{--            <div class="swiper-pagination"></div>--}}
            </div>


            <br>
            <a href="{{ route('get-pdf') }}" target="_blank">Get PDF</a>
            <br>
            <br>
            <br>
            <br>
        </div>
        <br>
        <br>

        @livewireScripts

        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script src="{{ asset('js/int-tel-input/intlTelInput.min.js') }}"></script>
        <script src="{{ asset('js/int-tel-input/initialize.js') }}"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                loop: true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
    </body>
</html>
