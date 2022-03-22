<div x-data="{ modelOpen: false }">

    @if($name == 'Update')
        <button wire:click="edit('{{$id}}')" @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform btn rounded-md focus:ring-opacity-50">
            <span class="text-white">{{ $name }}</span>
        </button>
    @else
        <button @click="modelOpen =!modelOpen" class=" @if ($name === 'Delete') bg-red-500 @else btn @endif flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform  rounded-md focus:ring-opacity-50">
            <span class="text-white">{{ $name }}</span>
        </button>
    @endif


    {{-- Model --}}
    @include('components.dashboard.modal')

</div>
