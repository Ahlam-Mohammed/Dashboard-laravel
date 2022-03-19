@foreach ($services as $serv)
    <tr class="max-h-32">
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <div class="flex items-center">
                <div class="ml-3">
                    <a href="{{ url('user') }}" class="text-gray-900 whitespace-no-wrap">
                        {{ $serv->title }}
                    </a>
                </div>
            </div>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">{{ $serv->description }}</p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">
                {{ $serv->created_at->format('Y-m-d')  }}
            </p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

            @if ($serv->is_active === true)
            <span
            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                <span aria-hidden
                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                <button  wire:click="isActive('{{ $serv->_id }}')" class="relative">Active</button>
            </span>

            @else
                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                    <span aria-hidden="" class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                <button   wire:click="isActive('{{ $serv->_id }}')" class="relative">Inactive</button>
                </span>
            @endif
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

            <div class="inline-flex gap-3">
                {{-- Update Button --}}
                @include('components.dashboard.button-modal', ['name' => 'Update', 'title' => 'Update Service' , 'template' => 'services.template.update', 'id' => $serv->_id])

                {{-- Delete Button --}}
                @include('components.dashboard.button-modal', ['name' => 'Deltet', 'title' => 'Delete Service' , 'template' => 'services.template.delete', 'id' => $serv->_id])
            </div>

        </td>
    </tr>
@endforeach
