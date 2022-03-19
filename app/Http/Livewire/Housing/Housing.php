<?php

namespace App\Http\Livewire\Housing;

use App\Repositories\HousingRepository;
use App\Repositories\TypeHousingRepository;
use App\Services\HousingService;
use Livewire\Component;

class Housing extends Component
{
    public $name;
    public $type;
    public $location;
    public $price;
    public $period;
    public $image;
    public $is_active;
    public $housing_id;

    public $housing;
    public $types;

    private $housingService;
    private $housingRepository;
    private $typeRepository;

    public function __construct()
    {
        $this->housingRepository = new HousingRepository();
        $this->housingService    = new HousingService();
        $this->typeRepository    = new TypeHousingRepository();

    }

    public function render()
    {
        $this->types  = $this->typeRepository->getAll();
        $this->housing = $this->housingRepository->getAll();
        return view('livewire.housing.housing');
    }

    protected $rules =
    [
        'name'      => 'required',
        'type'      => 'required',
        'location'  => 'required',
        'price'     => 'required',
        'period'    => 'required',
    ];

    public function store()
    {
        $this->validate($this->rules);

        $this->housingService   -> setName($this->name)
                                -> setType($this->type)
                                -> setLocation($this->location)
                                -> setPrice($this->price)
                                -> setPeriod($this->period);

        $this->housingService -> create();

        $this->resetInput();

        session()->flash('message', 'Created successfully.');
    }

    public function edit($id)
    {
        $record = $this->housingRepository->getHousingByID($id);

        $this->housing_id  = $id;
        $this->name        = $record->name;
        $this->type        = $record->type;
        $this->location    = $record->location;
        $this->price       = $record->price;
        $this->period      = $record->period;
        $this->is_active   = $record->is_active;
    }

    public function update()
    {
        $this->validate($this->rules);

        if ($this->housing_id)
        {
            $record = $this->housingRepository->getHousingByID($this->housing_id);

            $this->housingService   -> setName($this->name)
                                    -> setType($this->type)
                                    -> setLocation($this->location)
                                    -> setPrice($this->price)
                                    -> setPeriod($this->period);

            $this->housingService -> update($record);

            $this->resetInput();

            session()->flash('message', 'Updated successfully.');
        }
    }

    public function isActive($id)
    {
        $record = $this->housingRepository -> getHousingByID($id);
        $this->is_active = $record->is_active === false ? true : false;

        $this->housingService  -> setIsActive($this->is_active)
                                -> updateIsActive($record);

        session()->flash('message', 'Active status updated.');
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = $this->housingRepository->getHousingByID($id);
            $this->housingService->delete($record);

            session()->flash('message', 'Deleted successfully');
        }
    }

    public function resetInput()
    {
        $this-> name     = null;
        $this-> type     = null;
        $this-> location = null;
        $this-> price    = null;
        $this-> period   = null;
    }
}
