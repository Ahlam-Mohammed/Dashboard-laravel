@foreach ($housing as $x)
    <tr class="max-h-32">
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <div class="flex items-center">
                <div class="ml-3">
                    <a class="text-gray-900 whitespace-no-wrap">
                        {{ $x->name }}
                    </a>
                </div>
            </div>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">{{ $x->type }}</p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">{{ $x->location }}</p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">{{ $x->price }}</p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">{{ $x->period }}</p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">
                {{ $x->created_at->format('Y-m-d')  }}
            </p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

            @if ($x->is_active === true)
            <span
            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                <span aria-hidden
                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                <button  wire:click="isActive('{{ $x->_id }}')" class="relative">Active</button>
            </span>

            @else
                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                    <span aria-hidden="" class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                <button   wire:click="isActive('{{ $x->_id }}')" class="relative">Inactive</button>
                </span>
            @endif
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

            <div class="inline-flex gap-3">
                {{-- Update Button --}}
                @include('components.dashboard.button-modal', ['name' => 'Update', 'title' => 'Update Housing' , 'template' => 'housing.template.update', 'id' => $x->_id])

                {{-- Delete Button --}}
                @include('components.dashboard.button-modal', ['name' => 'Deltet', 'title' => 'Delete Housing' , 'template' => 'housing.template.delete', 'id' => $x->_id])
            </div>

        </td>
    </tr>
@endforeach
