<?php

namespace App\Http\Livewire\Housing;

use App\Repositories\TypeHousingRepository;
use App\Services\TypeHousingService;
use Livewire\Component;

class TypeHousing extends Component
{
    public $name;
    public $type_id;

    public $types;

    private $typeService;
    private $typeRepository;

    public function __construct()
    {
        $this->typeService    = new TypeHousingService();
        $this->typeRepository = new TypeHousingRepository();
    }

    public function render()
    {
        $this->types = $this->typeRepository->getAll();
        return view('livewire.housing.type-housing');
    }

    protected $rules =
    [
        'name' => 'required',
    ];

    public function store()
    {
        $this->validate($this->rules);

        $this->typeService  -> setName($this->name);

        $this->typeService -> create();

        $this->resetInput();

        session()->flash('message', 'Created successfully.');
    }

    public function edit($id)
    {
        $record = $this->typeRepository->getTypeByID($id);

        $this->type_id    = $id;
        $this->name       = $record->name;
        $this->is_active  = $record->is_active;
    }

    public function update()
    {
        $this->validate($this->rules);

        if ($this->type_id)
        {
            $record = $this->typeRepository -> getTypeByID($this->type_id);

            $this->typeService  -> setName($this->name);

            $this->typeService -> update($record);

            $this->resetInput();

            session()->flash('message', 'Updated successfully.');
        }
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = $this->typeRepository->getTypeByID($id);
            $this->typeService->delete($record);

            session()->flash('message', 'Deleted successfully');
        }
    }


    public function resetInput()
    {
        $this-> name    = null;
        $this-> type_id = null;
    }
}
