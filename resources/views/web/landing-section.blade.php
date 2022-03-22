@foreach ($landing as $landing)
@php
    $background = "images/landing/$landing->background";
@endphp

<section class="bg-[url({{ asset("$background") }})] bg-cover sm:bg-bottom lg:h-[64.875rem]">
    <!-- Header Section -->
    <nav>
        <!-- Navigation Desktop -->
        <div>
            <ul class="sm:flex hidden justify-center items-center pt-8 nav">
                <li><a class="text-lg mr-[60px]" href="#">About</a></li>
                <li><a class="text-lg mr-[60px]" href="#">Design</a></li>
                <li><a class="text-lg mr-[60px]" href="#">Blog</a></li>
                <li><a class="text-lg mr-[60px]" href="#">Service</a></li>
                <li><a class="text-lg  " href="#">Contact</a></li>
            </ul>
        </div>
        <!-- Hamburger Button -->
        <div class="flex justify-end">
            <button class="hamburger hamburger--collapse sm:hidden block relative z-10" id="hamburger" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <!-- Navigation Mobile -->
        <div class="hidden" id="menu">
            <ul class="pt-8 flex flex-col justify-center items-center gap-6 nav nav--mobile">
                <li class="mr-0"><a href="#">About</a></li>
                <li class="mr-0"><a href="#">Design</a></li>
                <li class="mr-0"><a href="#">Blog</a></li>
                <li class="mr-0"><a href="#">Service</a></li>
                <li class="mr-0"><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Intro Text  -->
    <article class="lg:w-[49.313rem] w-full intro">
        <div class="lg:block lg:pl-44 lg:pt-52 lg:h-[49rem] flex items-start flex-col pt-14 pl-5 h-[30rem]">
            <h1 class="lg:text-[5rem] font-medium leading-none	text-white text-4xl">
                {{ $landing->title }}
            </h1>
            <p class=" lg:text-2xl text-xl mt-[20px]">
                {{ $landing->sub_title }}
            </p>
            <a class="btn md:w-60 w-48 md:h-[70px] h-14 md:py-[21px] md:pl-[42px] md:pr-[41px] p-3 text-center md:text-2xl text-lg font-medium rounded-[10px] block text-white mt-[70px]">Discover Now</a>
        </div>
    </article>
</section>
@endforeach
