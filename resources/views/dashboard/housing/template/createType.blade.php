<form enctype="multipart/form-data">
    <div>
        <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Type Name</label>
        <input wire:model="name" id="name" placeholder="Type" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('name') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-end mt-6">
        <button @click="modelOpen = false" wire:click.prevent="store()"  class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform btn rounded-md  focus:outline-none 0 focus:ring focus:ring-opacity-50">
            Create
        </button>
    </div>
</form>
