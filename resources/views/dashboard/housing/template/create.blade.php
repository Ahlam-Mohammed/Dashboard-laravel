@php

use App\Enum\HousingEnum;

@endphp

<form enctype="multipart/form-data">
    <div>
        <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Name Housing</label>
        <input wire:model="name" id="name" placeholder="Name Housing" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('name') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <label for="location" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Location</label>
        <input name="location" wire:model.defer='location' id="location" placeholder="Location As London, United Kingdom" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('location') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <label for="price" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Price</label>
        <input name="price" wire:model.defer='price' id="price" type="number" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('price') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    {{-- <div class="mt-4">
        <label for="period" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Period</label>
        <input name="period" wire:model.defer='period' id="period" placeholder="Period As per week" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('period') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div> --}}

    <div class="mt-4">
        <label for="period" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Select Period ....</label>
        <select name="period" wire:model.defer='period' id="period" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            <option selected>
                Selected Period
            </option>
            <option value="{{ HousingEnum::PERIOD_PER_WEEK }}">
                {{ HousingEnum::PERIOD_PER_WEEK  }}
            </option>
            <option value="{{ HousingEnum::PERIOD_PER_MONTH }}">
                {{ HousingEnum::PERIOD_PER_MONTH  }}
            </option>
            <option value="{{ HousingEnum::PERIOD_PER_YEAR }}">
                {{ HousingEnum::PERIOD_PER_YEAR  }}
            </option>
        </select>
        @error('type') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <label for="type" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Select Type Housing ....</label>
        <select name="type" wire:model.defer='type' id="type" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            <option selected>
                Selected Type
            </option>
            @foreach ($types as $type)
                <option value="{{ $type->name }}">
                    {{ $type->name }}
                </option>
            @endforeach
        </select>
        @error('type') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <label class="text-gray-700" for="image">Image</label>
        <label class="block">
            <span class="sr-only">Choose Image</span>
            <input type="file" name= "image" wire:model='image' class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
            "/>
        </label>
        @error('image') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
        <div wire:loading wire:target="image" class="sp sp-circle"></div>
    </div>


    <div class="flex justify-end mt-6">
        <button @click="modelOpen = false" wire:click.prevent="store()"  class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform btn rounded-md  focus:outline-none 0 focus:ring focus:ring-opacity-50">
            Create
        </button>
    </div>
</form>
