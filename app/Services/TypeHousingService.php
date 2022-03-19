<?php
namespace App\Services;

use App\Models\TypeHousing;

class TypeHousingService
{

    public $name;
    public $id;

    public function create()
    {
        $type = TypeHousing::create(
            [
                'name'       => $this->name,
            ]);

        return response()->json([
            'success'       => ($type) ? true : false,
            'message'       => ($type) ? 'created successfully' : 'Failed created',
        ]);
    }

    public function update(TypeHousing $type)
    {
        $type->update(
            [
                'name'       => $this->name,
            ]);

        return response()->json([
            'success'       => ($type) ? true : false,
            'message'       => ($type) ? 'updated successfully' : 'Failed updated',
        ]);
    }


    public function delete(TypeHousing $type)
    {
        $type->delete();
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
}
