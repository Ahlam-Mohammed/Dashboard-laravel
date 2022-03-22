<?php

namespace App\Http\Livewire\Users;

use App\Models\User as Users;
use App\Services\UserService;
use Livewire\Component;

class User extends Component
{
    public $name;
    public $email;
    public $password;
    public $user_id;

    public $users;

    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function render()
    {
        $this->users = Users::all();
        return view('livewire.users.user');
    }

    protected $rules =
    [
        'name'     => 'required',
        'email'    => 'required|email|unique:email',
        'password' => 'required'
    ];

    public function store()
    {
        $this->validate($this->rules);

        $this->userService  -> setName($this->name)
                            -> setEmail($this->email)
                            -> setPassword($this->password);

        $this->userService -> create();

        $this->resetInput();

        session()->flash('success', 'Created successfully.');
    }

    public function edit($id)
    {
        $record = Users::find($id);

        $this->user_id    = $id;
        $this->name       = $record->name;
        $this->email      = $record->email;
    }

    public function update()
    {
        $this->validate($this->rules);

        if ($this->user_id)
        {
            $record = Users::find($this->user_id);

            $this->userService  -> setName($this->name)
                                -> setEmail($this->email);

            $this->userService -> update($record);

            $this->resetInput();

            session()->flash('success', 'Updated successfully.');
        }
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = Users::find($id);
            $this->userService->delete($record);

            session()->flash('success   ', 'Deleted successfully');
        }
    }


    public function resetInput()
    {
        $this-> name    = null;
        $this-> email   = null;
        $this->user_id  = null;
    }
}
