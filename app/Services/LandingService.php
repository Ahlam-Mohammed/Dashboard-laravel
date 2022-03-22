<?php
namespace App\Services;

use App\Models\LandingSection;


class LandingService
{

    private $title;
    private $subTitle;
    private $background;
    private $is_active;

    public function create()
    {
        $landing = LandingSection::create(
            [
                'title'        => $this->title,
                'sub_title'    => $this->subTitle,
                // 'background'   => $this->background->store('landing')
                'is_active'  => false,
            ]);

        return response()->json([
            'success'       => ($landing) ? true : false,
            'message'       => ($landing) ? 'created successfully' : 'Failed created',
        ]);
    }

    public function update(LandingSection $landing)
    {
        $landing->update(
            [
                'title'        => $this->title,
                'sub_title'    => $this->subTitle,
                // 'background'   => $this->background->store('landing')
            ]);

        return response()->json([
            'success'       => ($landing) ? true : false,
            'message'       => ($landing) ? 'updated successfully' : 'Failed updated',
        ]);
    }

    public function updateIsActive(LandingSection $landing)
    {
        $landing->update(
            [
                'is_active' => $this->is_active,
            ]);

        return response()->json([
            'success'       => ($landing) ? true : false,
            'message'       => ($landing) ? 'updated successfully' : 'Failed updated',
        ]);
    }

    public function delete(LandingSection $landing)
    {
        $landing->delete();
    }


    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }

    public function setBackground($background)
    {
        $this->background  = $background;
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
