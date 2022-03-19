{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @include('layouts.simple.style')

    </head>
    <body class="bg-slate-200 font-rubik">
        <!-- Landing Section -->
        <section class="bg-[url({{ asset('images/landing/defult-landing.png') }})] lg:bg-bottom bg-bottom-center lg:h-[64.875rem]">
            <!-- Header Section -->
            <nav>
                <!-- Navigation Desktop -->
                <div>
                    <ul class="sm:flex hidden justify-center items-center pt-8">
                        <li><a class="text-lg text-cyan-900 mr-[60px]" href="#">About</a></li>
                        <li><a class="text-lg text-cyan-900 mr-[60px]" href="#">Design</a></li>
                        <li><a class="text-lg text-cyan-900 mr-[60px]" href="#">Blog</a></li>
                        <li><a class="text-lg text-cyan-900 mr-[60px]" href="#">Service</a></li>
                        <li><a class="text-lg text-cyan-900  " href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- Hamburger Button -->
                <div class="flex justify-end">
                    <button class="hamburger hamburger--collapse sm:hidden block" id="hamburger" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Navigation Mobile -->
                <div class="hidden" id="menu">
                    <ul class="pt-8 flex flex-col justify-center items-center gap-6 ">
                        <li class="mr-0"><a href="#">About</a></li>
                        <li class="mr-0"><a href="#">Design</a></li>
                        <li class="mr-0"><a href="#">Blog</a></li>
                        <li class="mr-0"><a href="#">Service</a></li>
                        <li class="mr-0"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Intro Text  -->
            <article class="lg:w-[49.313rem]">
                <div class="lg:block lg:pl-[180px] lg:pt-[202px] lg:h-[49rem] flex items-start flex-col pt-[110px] pl-10 h-[39rem]">
                    <h1 class="lg:text-[5rem] font-medium leading-none	text-white text-6xl">Let’s find your Paradise</h1>
                    <p class="text-cyan-900 text-2xl mt-[20px]">Find your favorite place to live</p>
                    <a class="w-60 h-[70px] bg-Teal-600 py-[21px] pl-[42px] pr-[41px] text-2xl font-medium rounded-[10px] block text-white mt-[70px]">Discover Now</a>
                </div>
            </article>
        </section>

        <!-- Filter Section -->
        <section class="w-full">
            <div class="lg:w-[74%] h-[8.75rem] lg:pl-[50px] -mt-[70px] rounded-[10px] m-auto bg-white sm:flex hidden justify-between pl-5" style=" box-shadow: 0 4px 32px rgb(61, 105, 119 , 10%);">
                <div class="flex lg:gap-[132px] pt-[36px] gap-8">
                    <article>
                        <h4>Location</h4>
                        <h3 class="mt-[10px]">London, UK</h3>
                    </article>
                    <article>
                        <h4>Type</h4>
                        <h3 class="mt-[10px]">Apartment</h3>
                    </article>
                    <article>
                        <h4>Budget</h4>
                        <h3 class="mt-[10px]">$200</h3>
                    </article>
                </div>
                <a class="h-[70px] bg-Teal-600 py-[21px] pl-[42px] pr-[41px] text-2xl font-medium rounded-[10px] block text-white lg:h-[80px] lg:w-60 lg:pt-[24px] lg:pb-[23px] lg:pl-[91px] lg:pr-[90px] text-28 w-36 mt-[30px] lg:mr-[37px] mr-5">Find</a>
            </div>
        </section>

        <main>
            <!-- Search Section -->
            <section class="overflow-hidden">
                <div class="relative lg:h-[691px] lg:pt-[63px] flex justify-center items-center md:h-[591px] h-[400px]">
                    <img class="absolute top-22 -z-10 right-3/4" src="assets/images/map.svg" alt="map image">
                    <img class="absolute top-22 -z-10 left-3/4" src="assets/images/map.svg" alt="map image">
                    <div class="w-[630px]">
                        <h1 class="px-7 lg:text-64 text-center md:text-5xl sm:text-4xl text-3xl">
                            We are in almost all parts of the world
                        </h1>
                        <p class="px-24 mt-5 lg:text-2xl font-rubik font-light text-center text-xl">
                            So don't worry, you can use our service wherever you are
                        </p>
                        <form class="w-[400px] h-[70px] m-auto mt-[54px] rounded-[10px] flex justify-center items-center bg-white">
                            <img src="assets/images/icon/search.svg" alt="search icon">
                            <input class="w-[284px] p-8 h-[46px]  text-xl" type="text" placeholder="London, United Kingdom">
                        </form>
                    </div>
                </div>
            </section>

            <!-- Popular Apartments Section -->
            <section>
                <header class="text-center md:mb-[80px] mb-12 px-4">
                    <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">Most Popular</h1>
                    <p class="md:text-2xl text-lg mt-[10px]">on <span class="text-Teal-600">London</span></p>
                </header>
                <div class="grid md:grid-cols-3 lg:w-full lg:px-[150px] m-auto sm:pb-[205.3px] w-full grid-cols-1 pb-16">

                    <!-- Single Apartment -->
                    <article class="flex md:mb-0 mb-5 items-center lg:justify-start justify-center">
                        <div class="lg:w-[340px] lg:h-[425.87px] bg-white rounded-[20px] shadow--sm w-11/12  h-[325.87px]">
                            <div class="lg:h-[302.6px] relative bg-center bg-no-repeat bg-cover rounded-t-[20px] w-full h-[202.6px]" style="background-image: url(assets/images/mp1.png);">
                                <div class="absolute w-[70px] h-[35px] rounded-[10px] flex justify-center gap-1 items-center right-4 top-6 bg-white/50">
                                    <span class="text-base">4.6</span>
                                    <img src="assets/images/icon/star.svg" alt="star icon">
                                </div>
                            </div>
                            <div class="px-[25px] pt-[13.4px] pb-[17.9px]">
                                <a class="text-2xl font-medium">Container Apartment</a>
                                <p class="text-sm mt-[5px]">London, United Kingdom</p>
                                <h4 class="text-2xl mt-[14px]">$220 <span class="text-sm">/per week</span></h4>
                            </div>
                        </div>
                    </article>

                    <!-- Single Apartment -->
                    <article class="flex md:mb-0 mb-5 justify-center">
                        <div class=" bg-white rounded-[20px] shadow--sm lg:w-[400px] lg:h-[498.67px] md:h-[390px] w-11/12  sm:h-[458.67px] h-[325.87px]">
                            <div class="relative bg-center bg-no-repeat bg-cover rounded-t-[20px] lg:h-[356px] md:h-[250px] w-full sm:h-[316px] h-[202.6px]" style="background-image: url(assets/images/mp2.png);">
                                <div class="absolute rounded-[10px] flex justify-center gap-1 items-center right-4 top-6 bg-white/50
                                sm:w-[90px] sm:h-[45px] w-[70px] h-[35px]">
                                    <span class="sm:text-xl text-base">4.8</span>
                                    <img src="assets/images/icon/star.svg" alt="star icon">
                                </div>
                            </div>
                            <div class="px-[30px] pt-[15px] pb-[20.7px] ">
                                <a class="sm:text-28 text-2xl font-medium">Mera Apartment</a>
                                <p class="sm:text-base text-sm mt-[5px]">London, United Kingdom</p>
                                <h4 class="sm:text-28 sm:mt-[19px] text-2xl mt-[14px]">$240 <span class="sm:text-base text-sm">/per week</span></h4>
                            </div>
                        </div>
                    </article>

                    <!-- Single Apartment -->
                    <article class="flex md:mb-0 mb-5 items-center lg:justify-end justify-center">
                        <div class="lg:w-[340px] lg:h-[425.87px] bg-white rounded-[20px] shadow--sm
                        w-11/12  h-[325.87px]">
                            <div class="lg:h-[302.6px] relative bg-center bg-no-repeat bg-cover rounded-t-[20px] w-full h-[202.6px]" style="background-image: url(assets/images/mp3.png);">
                                <div class="absolute w-[70px] h-[35px] rounded-[10px] flex justify-center gap-1 items-center right-4 top-6 bg-white/50">
                                    <span class="text-base">4.4</span>
                                    <img src="assets/images/icon/star.svg" alt="star icon">
                                </div>
                            </div>
                            <div class="px-[25px] pt-[13.4px] pb-[17.9px]">
                                <a class="text-2xl font-medium">Sun Apartment</a>
                                <p class="text-sm mt-[5px]">London, United Kingdom</p>
                                <h4 class="text-2xl mt-[14px]">$180 <span class="text-sm">/per week</span></h4>
                            </div>
                        </div>
                    </article>

                </div>
            </section>

            <!-- Services Section -->
            <section>
                <header class="text-center md:mb-[80px] mb-12 px-4 mb-[60px]" >
                    <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">Get all the</h1>
                    <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">best services with us</h1>
                    <p class="md:text-2xl text-lg mt-[10px]">we have many advantages over many</p>
                    <p class="md:text-2xl text-lg mt-[10px]">other competitors</p>
                </header>
                <div class="grid md:grid-cols-3 lg:w-full lg:px-[150px] m-auto lg:pb-[282px] w-[95%] grid-cols-1 pb-[100px]">
                    <!-- Single Service -->
                    <article class="flex md:mb-0 mb-6 items-center lg:justify-start  justify-center">
                        <div class="lg:w-[360px] lg:h-[460px] rounded-[20px] md:pt-[70px] md:pb-[75px] md:w-[330px] md:h-[360px] w-11/12 h-[290px] pt-3" style="background: linear-gradient(rgb(255, 255, 255, 45%),rgb(255, 255, 255, 80%), rgb(255, 255, 255, 80%)); box-shadow:0 8px 32px rgb(61, 105, 111, 8%);">
                            <div class="flex justify-center row-auto">
                                <svg id="vuesax_linear_tag" data-name="vuesax/linear/tag" xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96">
                                    <g id="vuesax_linear_tag-2" data-name="vuesax/linear/tag">
                                        <g id="tag">
                                            <path id="Vector" d="M5.619,50.105l18.12,18.12a19.121,19.121,0,0,0,27,0L68.3,50.665a19.121,19.121,0,0,0,0-27L50.139,5.585a19,19,0,0,0-14.4-5.56l-20,.96A15.455,15.455,0,0,0,.979,15.665l-.96,20A19.216,19.216,0,0,0,5.619,50.105Z" transform="translate(11.061 11.095)" fill="none" stroke="#2db7ae" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                                            <path id="Vector-2" data-name="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(28 28)" fill="none" stroke="#2db7ae" stroke-linecap="round" stroke-width="5"/>
                                            <path id="Vector-3" data-name="Vector" d="M0,0H96V96H0Z" fill="none" opacity="0"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-center sm:mt-10 sm:mb-[30px] my-1">
                                <h3 class="text-2xl leading-none text-cyan-900">Book anytime</h3>
                            </div>
                            <div class="lg:px-[76px] px-2 text-center">
                                <p class="text-lg">
                                    You can order anytime, and your order will be safe even though
                                    it is far from the order date
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Single Service -->
                    <article class="flex md:mb-0 mb-6 justify-center">
                        <div class="rounded-[20px] md:pt-[70px] md:pb-[75px] w-11/12 h-[290px] pt-3 lg:w-[360px] lg:h-[480px] md:w-[330px] md:h-[380px]" style="background: linear-gradient(rgb(255, 255, 255, 45%),rgb(255, 255, 255, 80%), rgb(255, 255, 255, 80%)); box-shadow:0 8px 32px rgb(61, 105, 111, 8%);">
                            <div class="flex justify-center row-auto">
                                <img src="assets/images/icon/ticket-discount.svg" alt="discount icon">
                            </div>
                            <div class="text-center sm:mt-10 sm:mb-[30px] my-1">
                                <h3 class="text-2xl leading-none text-cyan-900">Lots of discounts</h3>
                            </div>
                            <div class="lg:px-[76px] px-2 text-center">
                                <p class="text-lg">
                                    The more you order, the cheaper the discount. the more you don't have to
                                    worry about running out of money while traveling
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Single Service -->
                    <article class="flex md:mb-0 mb-6 items-center lg:justify-end justify-center">
                        <div class="lg:w-[360px] lg:h-[460px] rounded-[20px] md:pt-[70px] md:pb-[75px] md:w-[330px] md:h-[360px] w-11/12 h-[290px] pt-3" style="background: linear-gradient(rgb(255, 255, 255, 45%),rgb(255, 255, 255, 80%), rgb(255, 255, 255, 80%)); box-shadow:0 8px 32px rgb(61, 105, 111, 8%);">
                            <div class="flex justify-center row-auto">
                                <img src="assets/images/icon/shield-tick.svg" alt="tick icon">
                            </div>
                            <div class="text-center sm:mt-10 sm:mb-[30px] my-1">
                                <h3 class="text-2xl leading-none text-cyan-900">Guaranteed Service</h3>
                            </div>
                            <div class="lg:px-[76px] px-2 text-center">
                                <p class="text-lg">
                                    Secure payment, you don't have to worry. Because your every order
                                    is always guaranteed
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <div class="w-full lg:h-[2075px] overflow-hidden" style="background: linear-gradient(180deg, rgb(255,255,255,0%), rgb(255,255,255,100%))">
            <!-- Say About Our Service Section -->
            <section class="h-[695.23px]">
                <header class="text-center md:mb-[80px] mb-12 px-4 ">
                    <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">What do they</h1>
                    <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">say about our service</h1>
                    <p class="md:text-2xl text-lg mt-[10px]">We have many loyal customers, this is what they say about us</p>
                </header>
                <div class="md:mt-[154px] mt-6">
                    <div class="relative">
                        <img class="absolute lg:z-0 -z-20" src="assets/images/Vector-left.svg" alt="Vector-left background">
                        <img class="absolute md:block hidden top-[184px] right-[58%] lg:z-10 -z-10" src="assets/images/person4.png" alt="person image">
                        <img class="absolute md:block hidden -top-[75px] left-[164px] lg:z-0 -z-10" src="assets/images/person5.png" alt="person image">
                        <img class="absolute md:block hidden top-[113px] left-7 lg:z-0 -z-10" src="assets/images/person6.png" alt="person image">
                    </div>
                    <div>
                        <article class="relative md:w-[530.86px] w-11/12 h-[300px] m-auto rounded-[10px] shadow--sm" style="background: linear-gradient(rgb(255, 255, 255, 67%), rgb(255, 255, 255, 100%))">
                            <img class="absolute right-[37.9px] top-[32px]" src="assets/images/icon/message-favorite.svg" alt="message-favorite icon">
                            <div class="sm:pt-[119px] sm:pb-[81px] sm:pr-[76.9px] sm:pl-[77px] pt-[90px] px-4">
                                <p class="text-2xl text-center">I get the best service everywhere
                                    I go. Vind makes it easy for me to
                                    get the best service.</p>
                            </div>
                        </article>
                    </div>
                    <div class="relative">
                        <img class="absolute right-[-1px] bottom-[33px] lg:z-0 -z-20" src="assets/images/Vector-right.svg" alt="Vector-left background">
                        <img class="absolute md:block hidden -right-5 -bottom-6 lg:z-0 -z-10" src="assets/images/person1.png" alt="person image">
                        <img class="absolute md:block hidden right-0 bottom-22 lg:z-0 -z-10" src="assets/images/person2.png" alt="person image">
                        <img class="absolute md:block hidden right-[18%] bottom-0 lg:z-0 -z-10" src="assets/images/person3.png" alt="person image">
                    </div>
                </div>
            </section>

            <!-- Download our apps Section -->
            <section class="lg:h-[587.86px] w-full lg:mb-[216.2px]  lg:mt-[243.7px] mt-11 lg:pl-[155px] lg:pr-[171px]
            md:px-[50px] px-5 md:mb-[96.2px] mb-12">
                <div class="flex md:flex-row flex-col">
                    <div>
                        <img class="md:w-full sm:w-3/4 w-3/4 m-auto" src="assets/images/iphon.png" alt="iphon image">
                    </div>
                    <div class="lg:ml-[158.4px] lg:pt-[151px] md:ml-[58.4px] md:pt-[51px] pt-[30px] ">
                        <h1 class="text-Teal-600 md:text-[50px] sm:text-3xl text-xl font-medium
                        md:text-left text-center">Download our apps</h1>
                        <p class="mt-3 md:text-22 sm:text-base text-sm
                        md:text-left text-center">Get a better experience just from
                            the palm of your hand</p>
                        <div class="flex items-center gap-[15px] mt-[31px] sm:flex-row flex-col">
                            <button class="md:w-[200px] w-full h-[70px] flex items-center rounded-[7.19px]" style="border: 0.43px solid #7599A9;">
                                <img src="assets/images/icon/google_play.svg" alt="google_play icon">
                                <div class="flex justify-start flex-col ml-[16.4px]">
                                    <span class="text-[11.51px] text-left">Get it on</span>
                                    <h6 class="text-lg font-medium">Google Play</h6>
                                </div>
                            </button>
                            <button class="md:w-[200px] w-full h-[70px] flex items-center rounded-[7.19px]" style="border: 0.43px solid #7599A9;">
                                <img src="assets/images/icon/apple.svg" alt="apple icon">
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
                relative sm:bg-right bg-left-top bg-no-repeat bg-[url('../images/footer.png')] px-7">
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
</html> --}}
