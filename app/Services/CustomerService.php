<?php
namespace App\Services;

use App\Models\CustomerSay;
use Livewire\WithFileUploads;

class CustomerService
{
    use WithFileUploads;

    private $comment;
    private $imag;
    private $is_active;

    public function create()
    {
        $comment = CustomerSay::create(
            [
                'comment'   => $this->comment,
                // 'imag'      => $this->imag->store('photos'),
                'is_active' => false
            ]);

        return response()->json([
            'success'       => ($comment) ? true : false,
            'message'       => ($comment) ? 'created successfully' : ' Failed created',
        ]);
    }

    public function update(CustomerSay $comment)
    {
        $comment->update(
            [
                'comment'   => $this->comment,
                // 'image'     => $this->imag,
            ]);

        return response()->json([
            'success'       => ($comment) ? true : false,
            'message'       => ($comment) ? 'updated successfully' : 'Failed updated',
        ]);
    }

    public function updateIsActive(CustomerSay $comment)
    {
        $comment->update(
            [
                'is_active' => $this->is_active,
            ]);

        return response()->json([
            'success'       => ($comment) ? true : false,
            'message'       => ($comment) ? 'updated successfully' : 'Failed updated',
        ]);
    }

    public function delete(CustomerSay $comment)
    {
        $comment->delete();
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function setImag($imag)
    {
        $this->imag = $imag;
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
