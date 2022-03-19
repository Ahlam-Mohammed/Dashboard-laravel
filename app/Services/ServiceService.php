<?php
namespace App\Services;


use App\Models\Service;
use App\Traits\UploadTrait;
use Livewire\WithFileUploads;
use App\Enum\ServiceEnum;

class ServiceService
{
    use WithFileUploads;
    use UploadTrait;

    public $title;
    public $description;
    public $icon;
    public $is_active;
    public $id;

    public function create()
    {
        $service = Service::create(
            [
                'title'       => $this->title,
                // 'icon'        => $this->storeImage($this->icon, ServiceEnum::SERVICE_IMAGE_PATH),
                'is_active'   => false,
                'description' => $this->description,
                'icon'        => $this->icon ? $this->icon : ServiceEnum::DEFAULT_IMAGE
            ]);

        return response()->json([
            'success'       => ($service) ? true : false,
            'message'       => ($service) ? 'created successfully' : 'Failed created',
        ]);
    }

    public function update(Service $service)
    {
        $service->update([
            'title'       => $this->title,
            'description' => $this->description,
            // 'icon'        => ($this->image??$icon->image)
        ]);

        return response()->json([
            'success'       => ($service) ? true : false,
            'message'       => ($service) ? 'updated successfully' : 'Failed updated',
        ]);
    }

    public function updateIsActive(Service $service)
    {
        $service->update(
            [
                'is_active' => $this->is_active,
            ]);

        return response()->json([
            'success'       => ($service) ? true : false,
            'message'       => ($service) ? 'updated successfully' : 'Failed updated',
        ]);
    }


    public function delete(Service $service)
    {
        $service->delete();
    }

    public function setID($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setIcon($icon)
    {
        if($icon){
            // $this->icon = $icon->store('services','public');
            $this->icon = $icon;
        }
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
