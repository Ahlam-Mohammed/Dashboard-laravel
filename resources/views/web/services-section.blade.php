@php
    $count = 0
@endphp

<section id="service">
    <header class="text-center md:mb-[80px] px-4 mb-[60px]" >
        <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">Get all the</h1>
        <h1 class="lg:text-[56px] md:text-5xl text-4xl font-medium">best services with us</h1>
        <p class="md:text-2xl text-lg mt-[10px]">we have many advantages over many</p>
        <p class="md:text-2xl text-lg mt-[10px]">other competitors</p>
    </header>
    <div class="grid md:grid-cols-3 2xl:w-11/12 lg:w-full lg:px-[150px] m-auto lg:pb-[282px] w-[95%] grid-cols-1 pb-[100px]">
        @foreach ($services as $service )
            @php
                $count = $count + 1
            @endphp
            <!-- Single Service -->
            <article class="flex md:mb-0 mb-6 items-center lg:justify-@if($count === 1)start @elseif ($count === 3)end  @endif  justify-center">
                <div class=" single_service @if ($count === 2) single_service--center @endif">
                    <div class="flex justify-center row-auto">
                        <img src="{{ asset('storage/services')}}/{{$service->icon}}" alt="discount icon">
                    </div>
                    <div class="text-center sm:mt-10 sm:mb-[30px] my-1 service">
                        <h3 class="text-2xl leading-none text-cyan-900">{{ $service->title}}</h3>
                    </div>
                    <div class="lg:px-16 px-2 text-center">
                        <p class="lg:text-lg">
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
