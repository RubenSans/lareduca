<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserManagement extends Component
{
    public $users, $roles, $userId, $name, $email, $selectedRoleId;

    public function mount()
    {
        $this->users = User::all();
        $this->roles = Role::all();
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->selectedRoleId = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'selectedRoleId' => 'required'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->selectedRoleId,
            'password' => bcrypt('password')
        ]);

        $role = Role::find($this->selectedRoleId);

        session()->flash('message', 'User created successfully.');

        $this->resetInputFields();
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user-management');
    }
}
