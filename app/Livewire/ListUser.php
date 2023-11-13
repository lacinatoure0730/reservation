<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class ListUser extends Component
{
    use WithPagination;
    protected $paginatationtheme = 'bootstrap' ;
    public $isEditData = false ;
    public $user ;
    public $delete_id ;
    public $form = [] ;

    public function addNewUser()
    {
        $this->isEditData = false ;
        $this->dispatch('show-modalUser');
    }

    public function saveUser()
    {
        $validatedData = Validator::make($this->form, [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ])->validate();

        User::create($validatedData);
        $this->form = [] ;
        $this->dispatch('hide-modalUser');
    }

    public function editUser(User $user){
        $this->isEditData = true ;
        $this->form = $user->toArray();
        $this->user = $user;
        $this->dispatch('show-modalUser');
    }

public function updateUser()
{
    $validatedData = Validator::make($this->form, [
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required|unique:users,email,'. $this->user->id,
        'password' => 'sometimes|confirmed',
    ])->validate();
    $this->user->update($validatedData);
    $this->dispatch('hide-modalUser');
}

    public function deleteUser($user_id)
    {
        $this->delete_id = $user_id;
        $this->dispatch('show-delete-modal');
    }

    public function confirmDelete()
    {
        User::findOrFail($this->delete_id)->delete();
        $this->dispatch('hide-delete-modal');
    }

    public function render()
    {
        $users = User::latest()->paginate(5);
        return view('livewire.admin.list-user', compact('users'));
    }
}
