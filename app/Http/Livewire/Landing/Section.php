<?php

namespace App\Http\Livewire\Landing;

use App\Repositories\LandingRepository;
use App\Services\LandingService;
use Livewire\Component;
use Livewire\WithFileUploads;

class Section extends Component
{
    use WithFileUploads;

    public $title;
    public $sub_title;
    public $background;
    public $is_active;
    public $landing_id;

    public $landing;

    private $landingService;
    private $landingRepository;

    public function __construct()
    {
        $this->landingService    = new LandingService();
        $this->landingRepository = new LandingRepository();
    }

    public function render()
    {
        $this->landing    = $this->landingRepository->get();
        return view('livewire.landing.section');
    }

    protected $rules =
    [
        'title'      => 'required',
        'sub_title'  => 'required',
        // 'background'  => 'required',
    ];


    public function store()
    {
        $this->validate($this->rules);

        $this->landingService   -> setTitle($this->title)
                                -> setSubTitle($this->sub_title)
                                -> setBackground($this->background);

        $this->landingService -> create();

        $this->resetInput();

        session()->flash('success', 'Created successfully.');
    }

    public function edit($id)
    {
        $record = $this->landingRepository->getByID($id);

        $this->landing_id  = $id;
        $this->title       = $record->title;
        $this->sub_title   = $record->sub_title;
        $this->background    = $record->background;
    }

    public function update()
    {
        $this->validate($this->rules);

        if ($this->landing_id)
        {
            $record = $this->landingRepository->getByID($this->landing_id);

            $this->landingService   -> setTitle($this->title)
                                    -> setSubTitle($this->sub_title)
                                    -> setBackground($this->background);

            $this->landingService -> update($record);

            $this->resetInput();

            session()->flash('success', 'Updated successfully.');
        }
    }

    public function isActive($id)
    {
        $record = $this->landingRepository -> getByID($id);

        $count = $this->landingRepository->getIsActive()->count();
        if ($record->is_active === false)
        {
            if ($count < 1)
            {
                $this->is_active = true;
                $this->landingService   -> setIsActive($this->is_active)
                                        -> updateIsActive($record);

                session()->flash('success', 'Active status updated.');
            }
            else
            {
                session()->flash('danger', 'There must be one active record');
            }
        }
        else
        {
            $this->is_active = false;
                $this->landingService   -> setIsActive($this->is_active)
                                        -> updateIsActive($record);

                session()->flash('success', 'Active status updated.');
        }
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = $this->landingRepository->getByID($id);
            $this->landingService->delete($record);

            session()->flash('success', 'Deleted successfully');
        }
    }

    public function resetInput()
    {
        $this-> title      = null;
        $this-> sub_title   = null;
        $this-> background = null;
    }
}


