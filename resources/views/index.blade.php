<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @include('layouts.simple.style')

    </head>
    <body>
        <!-- Landing Section -->
        @include('web.landing-section')

        <!-- Filter Section -->
        @include('web.filter-section')

        <main>
            <!-- Search Section -->
            @include('web.search-section')

            <!-- Popular Apartments Section -->
            @include('web.popular-section')

            <!-- Services Section -->
            @include('web.services-section')
        </main>

        <div class="w-full lg:h-[2075px] overflow-hidden" style="background: linear-gradient(180deg, rgb(255,255,255,0%), rgb(255,255,255,100%))">
            <!-- Say About Our Service Section -->
            @include('web.customer-say-section')

            <!-- Download our apps Section -->
            <section class="lg:h-[587.86px] w-full lg:mb-[216.2px]  lg:mt-[243.7px] mt-11 lg:pl-[155px] lg:pr-[171px]
            md:px-[50px] px-5 md:mb-[96.2px] mb-12">
                <div class="flex md:flex-row flex-col">
                    <div>
                        <img class="md:w-full sm:w-3/4 w-3/4 m-auto" src="{{ asset('images/iphon.png') }}" alt="iphon image">
                    </div>
                    <div class="lg:ml-[158.4px] lg:pt-[151px] md:ml-[58.4px] md:pt-[51px] pt-[30px] ">
                        <h1 class="text-Teal-600 md:text-[50px] sm:text-3xl text-xl font-medium
                        md:text-left text-center">Download our apps</h1>
                        <p class="mt-3 md:text-22 sm:text-base text-sm
                        md:text-left text-center">Get a better experience just from
                            the palm of your hand</p>
                        <div class="flex items-center gap-[15px] mt-[31px] sm:flex-row flex-col">
                            <button class="md:w-[200px] w-full h-[70px] flex items-center rounded-[7.19px]" style="border: 0.43px solid #7599A9;">
                                <img src="{{ asset('images/google_play.svg') }}" alt="google_play icon">
                                <div class="flex justify-start flex-col ml-[16.4px]">
                                    <span class="text-[11.51px] text-left">Get it on</span>
                                    <h6 class="text-lg font-medium">Google Play</h6>
                                </div>
                            </button>
                            <button class="md:w-[200px] w-full h-[70px] flex items-center rounded-[7.19px]" style="border: 0.43px solid #7599A9;">
                                <img src="{{ asset('images/apple.svg') }}" alt="apple icon">
                                <div class="flex justify-start flex-col">
                                    <span class="text-[11.51px] text-left">Get it on</span>
                                    <h6 class="text-lg font-medium">App Store</h6>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Section -->
            <footer>
                <div class="w-full sm:h-[381px] h-[300px] md:pl-[137px] grid lg:grid-cols-3 sm:grid-cols-3 grid-cols-1
                relative sm:bg-right bg-left-top bg-no-repeat bg-[url('{{ asset('images/footer.png') }}')] px-7">
                    <div class="pt-16 sm:text-left text-center">
                        <h1 class="text-4xl font-bold">Vin</h1>
                        <p class="text-base sm:w-[176px] mt-[9px] leading-7">Main Building, Bandung
                            West Java, Indonesia </p>
                        <div class="flex items-center sm:justify-start justify-center gap-[15px] mt-[17px]">
                            <img src="assets/images/icon/insta.svg" alt="instagram icon">
                            <img src="assets/images/icon/twitter.svg" alt="twitter icon">
                        </div>
                    </div>
                    <div class="sm:flex hidden gap-[99px] pt-16">
                        <div>
                            <h1 class="text-2xl font-bold mt-[14px]">Useful</h1>
                            <p class="text-base mt-[17px]">Find Vendor</p>
                            <p class="text-base mt-[17px]">Find job</p>
                            <p class="text-base mt-[17px]">Our</p>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold mt-[14px]">More</h1>
                            <p class="text-base mt-[17px]">About us</p>
                            <p class="text-base mt-[17px]">Our mission</p>
                            <p class="text-base mt-[17px]">How it</p>
                        </div>
                    </div>
                    <div class="absolute sm:left-[138px] bottom-[20px] text-center">
                        <p class="text-base">Vind Pty. Ltd 2011-2021©, All rights reserved.</p>
                    </div>
                </div>
            </footer>

        </div>

    </body>
    @include('layouts.simple.script')
</html>
