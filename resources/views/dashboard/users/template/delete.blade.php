<div class="mt-5">
    <h1 class="text-lg">Do you want to delete ?!</h1>
    <div class="flex justify-end gap-2 mt-6">
        <button @click="modelOpen = false" type="button" class="btn px-4 py-2 rounded-md text-md text-white">Cancle</button>
        <button @click="modelOpen = false" wire:click="destroy('{{$id}}')" class="bg-red-500 px-7 py-2 ml-2 rounded-md text-md text-white font-semibold">Ok</button>
    </div>
</div>
