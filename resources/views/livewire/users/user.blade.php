<div>
    @if (Session::has('message'))
        {{-- <div class="alert alert-info">{{ Session::get('message') }}</div> --}}
        <div class="flex fixed bottom-4 right-3 w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-center w-12 bg-emerald-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                    <p class="text-sm text-gray-600 ">{{ Session::get('message') }}</p>
                </div>
            </div>
        </div>
    @endif

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
                                @include('components.dashboard.button-modal', ['name' => 'Deltet', 'title' => 'Delete User' , 'template' => 'users.template.delete', 'id' => $user->_id])
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

</div>
