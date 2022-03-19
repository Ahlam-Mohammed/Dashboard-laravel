<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;


class UserService
{

    private $name;
    private $email;
    private $password;

    public function create()
    {
        $user = User::create(
            [
                'name'              => $this->name,
                'email'             => $this->email,
                'email_verified_at' => now(),
                'password'          => bcrypt($this->password), // password
                'remember_token'    => Str::random(10),
            ]);

        return response()->json([
            'success'       => ($user) ? true : false,
            'message'       => ($user) ? 'User created successfully' : 'User Failed created',
        ]);
    }

    public function update(User $user)
    {
        $user->update(
            [
                'name'              => $this->name,
                'email'             => $this->email,
            ]);

        return response()->json([
            'success'       => ($user) ? true : false,
            'message'       => ($user) ? 'Housing Type updated successfully' : 'Housing Type Failed updated',
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
