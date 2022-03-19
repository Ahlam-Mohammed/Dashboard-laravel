<?php

namespace App\Http\Livewire\Services;

use App\Repositories\ServiceRepository;
use App\Services\ServiceService;
use Livewire\WithFileUploads;


use Livewire\Component;

class Service extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $is_active;
    public $icon;
    public $service_id;

    private $serviceService;
    private $serviceRepository;

    public $services;

    public function __construct()
    {
        $this->serviceService    = new ServiceService();
        $this->serviceRepository = new ServiceRepository();
    }

    public function render()
    {
        $this->services = $this->serviceRepository->getAll();
        return view('livewire.services.service');
    }

    protected $rules =
    [
        'title'       => 'required',
        'description' => 'required',
        // 'icon'        => 'required',
    ];

    public function store()
    {
        $this->validate($this->rules);

        $this->serviceService   -> setTitle($this->title)
                                -> setDescription($this->description)
                                -> setIcon($this->icon);

        $this->serviceService -> create();

        $this->resetInput();

        session()->flash('message', 'Created successfully.');
    }

    public function edit($id)
    {
        $record = $this->serviceRepository->getServiceByID($id);

        $this->service_id  = $id;
        $this->description = $record->description;
        $this->title       = $record->title;
        $this->icon        = $record->icon;
        $this->is_active   = $record->is_active;
    }

    public function update()
    {
        $this->validate($this->rules);

        if ($this->service_id)
        {
            $record = $this->serviceRepository -> getServiceByID($this->service_id);

            $this->serviceService   -> setTitle($this->title)
                                    -> setDescription($this->description);

            $this->serviceService -> update($record);

            $this->resetInput();

            session()->flash('message', 'Updated successfully.');
        }
    }

    public function isActive($id)
    {
        $record = $this->serviceRepository -> getServiceByID($id);
        $this->is_active = $record->is_active === false ? true : false;

        $this->serviceService   -> setIsActive($this->is_active)
                                -> updateIsActive($record);

        session()->flash('message', 'Active status updated.');
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = $this->serviceRepository->getServiceByID($id);
            $this->serviceService->delete($record);

            session()->flash('message', 'Deleted successfully');
        }
    }

    private function resetInput()
    {
        $this->title       = null;
        $this->description = null;
        $this->icon        = null;
        $this->is_active   = null;
    }
}
