<div>
    {{-- Session Message --}}
    @include('components.dashboard.alert')

<!-- Content header -->
<div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
    <h1 class="text-2xl font-semibold">Users</h1>

        {{-- Create Button --}}
        @include('components.dashboard.button-modal', ['name' => 'Create New User', 'title' => 'Create New User' ,'template' => 'users.template.create'])
</div>

<div class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md mt-5">
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Name
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Created at
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                    <tr class="max-h-32">
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <a class="text-gray-900 whitespace-no-wrap">
                                        {{ $user->name }}
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <a class="text-gray-900 whitespace-no-wrap">
                                        {{ $user->email }}
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $user->created_at->format('Y-m-d')  }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                            <div class="inline-flex gap-3">
                                {{-- Update Button --}}
                                @include('components.dashboard.button-modal', ['name' => 'Update', 'title' => 'Update User' , 'template' => 'users.template.update', 'id' =>$user->_id])

                                {{-- Delete Button --}}
                                @include('components.dashboard.button-modal', ['name' => 'Delete', 'title' => 'Delete User' , 'template' => 'users.template.delete', 'id' => $user->_id])
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

</div>
