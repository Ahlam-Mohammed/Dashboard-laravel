<?php
namespace App\Services;

use App\Models\Housing;
use Livewire\WithFileUploads;

class HousingService
{
    use WithFileUploads;

    public $name;
    public $type;
    public $location;
    public $price;
    public $period;
    public $image;
    public $is_active;
    public $id;

    public function create()
    {
        $housing = Housing::create(
            [
                'name'       => $this->name,
                'type'       => $this->type,
                'location'   => $this->location,
                'price'      => $this->price,
                'period'     => $this->period,
                'is_active'  => false,
                // 'icon'        => $this->icon ? $this->icon : ServiceEnum::DEFAULT_IMAGE
            ]);

        return response()->json([
            'success'       => ($housing) ? true : false,
            'message'       => ($housing) ? 'created successfully' : 'Failed created',
        ]);
    }

    public function update(Housing $housing)
    {
        $housing->update(
            [
                'name'       => $this->name,
                'type'       => $this->type,
                'location'   => $this->location,
                'price'      => $this->price,
                'period'     => $this->period,
                // 'icon'        => ($this->image??$icon->image)
            ]);

        return response()->json([
            'success'       => ($housing) ? true : false,
            'message'       => ($housing) ? 'updated successfully' : 'Failed updated',
        ]);
    }

    public function updateIsActive(Housing $housing)
    {
        $housing->update(
            [
                'is_active' => $this->is_active,
            ]);

        return response()->json([
            'success'       => ($housing) ? true : false,
            'message'       => ($housing) ? 'updated successfully' : 'Failed updated',
        ]);
    }


    public function delete(Housing $housing)
    {
        $housing->delete();
    }

    public function setID($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setImage($image)
    {
        if($image){
            // $this->icon = $image->store('services','public');
            $this->icon = $image;
        }
        return $this;
    }

    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    public function setIsActive($is_active)
    {
        if ($is_active === false)
        {
            $this->is_active = false;
        }
        else $this->is_active = true;

        return $this;
    }
}
