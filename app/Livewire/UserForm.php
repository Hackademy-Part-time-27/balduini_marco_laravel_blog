<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Illuminate\Validation\Rule;
use App\Actions\Fortify\PasswordValidationRules;

class UserForm extends Component
{
    use PasswordValidationRules;

    public $userId = null;

    #[Validate]
    public $name = '';

    public $email = '';

    public $password = '';

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(false),
        ];
    }

    public function submit()
    {
        $this->validate();

        if($this->userId) {
            $user = User::find($this->userId);
            $user->update($this->only('name', 'email', 'password'));
            session()->flash('success', 'Utente modificato correttamente');

        } else {
            User::create($this->only('name', 'email', 'password'));
            $this->userReset();
            session()->flash('success', 'Utente creato correttamente');

        }

        $this->dispatch('user-created');
    }
    
    #[On('user-edit')]
    public function userLoad(User $user)
    {
        $this->userId = $user->id;

        $this->name = $user->name;

        $this->email = $user->email;
    }

    public function userReset()
    {
        $this->userId = null;

        $this->name = '';

        $this->email = '';

        $this->password = '';
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
