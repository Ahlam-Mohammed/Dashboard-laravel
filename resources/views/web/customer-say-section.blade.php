<section class="h-[695.23px] customer-say">
    <header class="text-center md:mb-[80px] mb-12 px-4 ">
        <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">What do they</h1>
        <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">say about our service</h1>
        <p class="md:text-2xl text-lg mt-[10px]">We have many loyal customers, this is what they say about us</p>
    </header>
    <div class="md:mt-[154px] mt-6">
        <div class="relative">
            <img class="absolute lg:z-0 -z-20" src="{{ asset('images/Vector-left.svg') }}" alt="Vector-left background">
            <img class="person-4 absolute md:block hidden top-[184px] right-[58%] lg:z-10 -z-10" src="{{ asset('images/person4.png') }}" alt="person image">
            <img class="person-5 absolute md:block hidden -top-[75px] left-[164px] lg:z-0 -z-10" src="{{ asset('images/person5.png') }}" alt="person image">
            <img class="person-6 absolute md:block hidden top-[113px] left-7 lg:z-0 -z-10" src="{{ asset('images/person6.png') }}" alt="person image">
        </div>
        <div>
            @foreach ($comments as $comments)
                <article class="relative md:w-[530.86px] w-11/12 h-[300px] m-auto rounded-[10px] shadow--sm" style="background: linear-gradient(rgb(255, 255, 255, 67%), rgb(255, 255, 255, 100%))">
                    <img class="absolute right-[37.9px] top-[32px]" src="{{ asset('images/message-favorite.svg') }}" alt="message-favorite icon">
                    <div class="sm:pt-[119px] sm:pb-[81px] sm:pr-[76.9px] sm:pl-[77px] pt-[90px] px-4">
                        <p class="text-2xl text-center">{{ $comments->comment }}</p>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="relative">
            <img class="absolute right-[-1px] bottom-[33px] lg:z-0 -z-20" src="{{ asset('images/Vector-right.svg') }}" alt="Vector-left background">
            <img class="person-1 absolute md:block hidden -right-5 -bottom-6 lg:z-0 -z-10" src="{{ asset('images/person1.png') }}" alt="person image">
            <img class="person-2 absolute md:block hidden right-0 bottom-22 lg:z-0 -z-10" src="{{ asset('images/person2.png') }}" alt="person image">
            <img class="person-3 absolute md:block hidden right-[18%] bottom-0 lg:z-0 -z-10" src="{{ asset('images/person3.png') }}" alt="person image">
        </div>
    </div>
</section>
