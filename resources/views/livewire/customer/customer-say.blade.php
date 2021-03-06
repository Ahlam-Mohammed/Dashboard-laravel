<div>
    {{-- Session Message --}}
    @include('components.dashboard.alert')

<!-- Content header -->
<div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
    <h1 class="text-2xl font-semibold">Customer say about our service</h1>

        {{-- Create Button --}}
        @include('components.dashboard.button-modal', ['name' => 'Create New Comment', 'title' => 'Create New Comment' ,'template' => 'customer.template.create'])
</div>

<div class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md mt-5">
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Comment
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Created at
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Status
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($customers as $customer)
                    <tr class="max-h-32">
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <a class="text-gray-900 whitespace-no-wrap">
                                        {{ $customer->comment }}
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $customer->created_at->format('Y-m-d')  }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                            @if ($customer->is_active === true)
                                <span
                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <button  wire:click="isActive('{{ $customer->_id }}')" class="relative">Active</button>
                                </span>

                            @else
                                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                    <span aria-hidden="" class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                <button   wire:click="isActive('{{ $customer->_id }}')" class="relative">Inactive</button>
                                </span>
                            @endif
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                            <div class="inline-flex gap-3">
                                {{-- Update Button --}}
                                @include('components.dashboard.button-modal', ['name' => 'Update', 'title' => 'Update Comment' , 'template' => 'customer.template.update', 'id' =>$customer->_id])

                                {{-- Delete Button --}}
                                @include('components.dashboard.button-modal', ['name' => 'Delete', 'title' => 'Delete Comment' , 'template' => 'customer.template.delete', 'id' => $customer->_id])
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

</div>
