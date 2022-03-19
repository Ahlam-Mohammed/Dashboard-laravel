<form>
    <div>
        <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">User Name</label>
        <input wire:model="name" id="name" placeholder="User Name" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('name') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">User Email</label>
        <input wire:model="email" id="email" placeholder="email@yx.com" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('email') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-end mt-6">
        <button @click="modelOpen = false" wire:click.prevent="update()" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
            Update
        </button>
    </div>
</form>
