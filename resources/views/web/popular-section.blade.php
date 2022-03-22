@php
    $count = 0
@endphp
<section>
    <header class="text-center md:mb-[80px] mb-12 px-4">
        <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">Most Popular</h1>
        <p class="md:text-2xl text-lg mt-[10px]">on <span class="span">London</span></p>
    </header>
    <div class="grid md:grid-cols-3 2xl:w-2/3 xl:w-10/12 lg:w-11/12 m-auto sm:pb-[205.3px]  w-full grid-cols-1 pb-16">

        @foreach ($housing as $housing)
            @php
                $count = $count + 1
            @endphp
            <!-- Single Apartment -->
            <article class="flex md:mb-0 mb-5 items-center lg:justify-@if($count === 1)start @elseif ($count === 3)end  @endif  justify-center">
                <div class="lg:w-[340px] lg:h-[425.87px] bg-white rounded-[20px] shadow--sm w-11/12  h-[325.87px] hover:shadow-lg transition duration-300 ease-in-out">
                    <div class="lg:h-[302.6px] relative bg-center bg-no-repeat bg-cover rounded-t-[20px] w-full h-[202.6px]" style="background-image: url({{ asset('storage/housing')}}/{{ $housing->image }});">
                        <div class="absolute w-[70px] h-[35px] rounded-[10px] flex justify-center gap-1 items-center right-4 top-6 bg-white/50">
                            <span class="text-base">4.6</span>
                            <img src="{{ asset('images/star.svg') }}" alt="star icon">
                        </div>
                    </div>
                    <div class="px-[25px] pt-[13.4px] pb-[17.9px] housing">
                        <a class="text-2xl font-medium">{{ $housing->name }}</a>
                        <p class="text-sm mt-[5px]">{{ $housing->location }}</p>
                        <h4 class="text-2xl mt-[14px]">${{ $housing->price }} <span class="text-sm">/{{ $housing->period }}</span></h4>
                    </div>
                </div>
            </article>
        @endforeach
        <!-- Single Apartment -->
        {{-- <article class="flex md:mb-0 mb-5 items-center lg:justify-start justify-center">
            <div class="lg:w-[340px] lg:h-[425.87px] bg-white rounded-[20px] shadow--sm w-11/12  h-[325.87px] hover:shadow-lg transition duration-300 ease-in-out">
                <div class="lg:h-[302.6px] relative bg-center bg-no-repeat bg-cover rounded-t-[20px] w-full h-[202.6px]" style="background-image: url({{ asset('images/apartments/defult-apartment-1.png') }});">
                    <div class="absolute w-[70px] h-[35px] rounded-[10px] flex justify-center gap-1 items-center right-4 top-6 bg-white/50">
                        <span class="text-base">4.6</span>
                        <img src="{{ asset('images/star.svg') }}" alt="star icon">
                    </div>
                </div>
                <div class="px-[25px] pt-[13.4px] pb-[17.9px] housing">
                    <a class="text-2xl font-medium">Container Apartment</a>
                    <p class="text-sm mt-[5px]">London, United Kingdom</p>
                    <h4 class="text-2xl mt-[14px]">$220 <span class="text-sm">/per week</span></h4>
                </div>
            </div>
        </article>

        <!-- Single Apartment -->
        <article class="flex md:mb-0 mb-5 justify-center">
            <div class=" bg-white rounded-[20px] shadow--sm lg:w-[400px] lg:h-[498.67px] md:h-[390px] w-11/12  sm:h-[458.67px] h-[325.87px] hover:shadow-lg transition duration-300 ease-in-out">
                <div class="relative bg-center bg-no-repeat bg-cover rounded-t-[20px] lg:h-[356px] md:h-[250px] w-full sm:h-[316px] h-[202.6px]" style="background-image: url({{ asset('images/apartments/defult-apartment-1.png') }});">
                    <div class="absolute rounded-[10px] flex justify-center gap-1 items-center right-4 top-6 bg-white/50
                    sm:w-[90px] sm:h-[45px] w-[70px] h-[35px]">
                        <span class="sm:text-xl text-base">4.8</span>
                        <img src="{{ asset('images/star.svg') }}" alt="star icon">
                    </div>
                </div>
                <div class="px-[30px] pt-[15px] pb-[20.7px] housing">
                    <a class="sm:text-28 text-2xl font-medium">Mera Apartment</a>
                    <p class="sm:text-base text-sm mt-[5px]">London, United Kingdom</p>
                    <h4 class="sm:text-28 sm:mt-[19px] text-2xl mt-[14px]">$240 <span class="sm:text-base text-sm">/per week</span></h4>
                </div>
            </div>
        </article>

        <!-- Single Apartment -->
        <article class="flex md:mb-0 mb-5 items-center lg:justify-end justify-center">
            <div class="lg:w-[340px] lg:h-[425.87px] bg-white rounded-[20px] shadow--sm w-11/12  h-[325.87px] hover:shadow-lg transition duration-300 ease-in-out">
                <div class="lg:h-[302.6px] relative bg-center bg-no-repeat bg-cover rounded-t-[20px] w-full h-[202.6px]" style="background-image: url({{ asset('images/apartments/defult-apartment-1.png') }});">
                    <div class="absolute w-[70px] h-[35px] rounded-[10px] flex justify-center gap-1 items-center right-4 top-6 bg-white/50">
                        <span class="text-base">4.4</span>
                        <img src="{{ asset('images/star.svg') }}" alt="star icon">
                    </div>
                </div>
                <div class="px-[25px] pt-[13.4px] pb-[17.9px] housing">
                    <a class="text-2xl font-medium">Sun Apartment</a>
                    <p class="text-sm mt-[5px]">London, United Kingdom</p>
                    <h4 class="text-2xl mt-[14px]">$180 <span class="text-sm">/per week</span></h4>
                </div>
            </div>
        </article> --}}

    </div>
</section>
