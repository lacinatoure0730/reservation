<?php

namespace App\Livewire;

use App\Models\Etudiant;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class ListEtudiant extends Component
{

    use WithPagination;
    protected $paginatationtheme = 'bootsrap' ;
    public $isEditData = false ;
    public $etudiant;
    public $delete_id;
    public $form = [];

    public function addEtudiant()
    {
        $this->isEditData = false ;
        $this->dispatch('show-modal');
    }

    public function save()
    {
        $validatedData = Validator::make($this->form, [
            'nom' => 'required',
            'prenom' => 'required',
            'chambre' => 'required|integer',
        ])->validate();

        Etudiant::create($validatedData);
        $this->form = []; // Reset the form after successful submission
        $this->dispatch('hide-modal');
    }

    public function editEtudiant(Etudiant $etudiant){
        $this->isEditData = true ;
        $this->form = $etudiant->toArray();
        $this->dispatch('show-modal');
    }

    public function update(Etudiant $etudiant)
{
    $validatedData = Validator::make($this->form, [
        'nom' => 'required',
        'prenom' => 'required',
        'chambre' => 'required|integer',
    ])->validate();

        $etudiant->update($validatedData);
        $this->dispatch('hide-modal');
}

    public function deleteEtudiant($etudiant_id)
    {
        $this->delete_id = $etudiant_id;
        $this->dispatch('show-delete-modal');
    }

    public function confirmDelete()
    {
        Etudiant::findOrFail($this->delete_id)->delete();
        $this->dispatch('hide-delete-modal');
    }

    public function render()
    {
        $etudiants = Etudiant::latest()->paginate(5);
        return view('livewire.admin.list-etudiant', compact('etudiants'));
    }

}
