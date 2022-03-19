{{-- /Custom Select --}}

<div x-data="selected" class="relative">
    <button @click="show = !show" class="px-4 rounded focus:outline-none ring focus:ring-blue-400 ring-blue-200">
        <h1 x-text="value === null ? 'Select' : value">Select</h1>
    </button>
    <div x-show="show" @click.outside="show = false" x-transition.opacity.scale.origin.top.duration.300ms class="absolute top-8 left-0 right-0">
        <template x-for="type in types" :key="type">
            <button @click="value = type;show:false">
                <h1 x-text="type" class="hover:text-blue-400"></h1>
            </button>
        </template>
    </div>
<div>

    <script>

        document.addEventListener('alpine:init', () => {
            Alpine.data('types', () => {
                type:['s','ss'],
                show:false,
                value:null
            })
        })

    </script>


