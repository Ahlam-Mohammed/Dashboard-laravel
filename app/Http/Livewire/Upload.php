<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $photo;
    public function render()
    {
        return view('livewire.upload');
    }


    public function save()
    {
        // $this->validate([
        //     // 'photo' => 'image|max:1024', // 1MB Max
        // ]);

        $this->photo->store('photos');
    }
}
