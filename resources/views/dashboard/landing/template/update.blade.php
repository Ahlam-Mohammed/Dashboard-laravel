<form enctype="multipart/form-data">
    <div>
        <label for="title" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Title</label>
        <input wire:model="title" id="title" placeholder="Title" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('title') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <label for="sub_title" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Sub Title</label>
        <input name="sub_title" wire:model.defer='sub_title' id="sub_title" placeholder="Sub Title" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        @error('sub_title') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <label class="text-gray-700" for="image">Background</label>
        <label class="block">
            <span class="sr-only">Choose</span>
            <input type="file" name= "background" wire:model='background' class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
            "/>
        </label>
        @error('background') <span class="text-red-800 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-end mt-6">
        <button @click="modelOpen = false" wire:click.prevent="update()"  class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform btn rounded-md  focus:outline-none 0 focus:ring focus:ring-opacity-50">
            Update
        </button>
    </div>
</form>
