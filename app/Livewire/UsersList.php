<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

use Livewire\Attributes\On;

class UsersList extends Component
{
    public $users;

    public function mount()
    {
        $this->usersLoad();
    }

    #[On('user-created')]
    public function usersLoad()
    {
        $this->users =  User::orderBy('id', 'DESC')->get();
    }
    
    public function edit($userId)
    {
        $this->dispatch('user-edit', $userId);
    }

    public function delete(User $user)
    {
        $user->articles()->update(['user_id' => null]);
        $user->delete();
        $this->usersLoad();
    }

    public function render()
    {
        return view('livewire.users-list');
    }
}
