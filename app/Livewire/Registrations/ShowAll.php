<?php

namespace App\Livewire\Registrations;

use Livewire\Component;
use App\Models\RegisterForm as Registration;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ShowAll extends Component
{
    use WithPagination;
    public $registrations;
    public $registrationId;
    public $details;
    public $editId;
    public $surname;
    public $othernames;
    public $email;
    public $phone;
    public $address;
    public $learner_surname;
    public $learner_names;
    public $dob;
    public $previous_class;
    public $remarks;
    public function show($registrationId)
    {
        $this->registrationId = $registrationId;
        $this->details = Registration::findOrFail($registrationId);
 
    }

    public function resetModal()
    {
        $this->registrationId = null;
        $this->details = null;
        $this->editId = null;
    }
    public function edit($registrationId)
    {
        $this->editId = $registrationId;
        $details = Registration::findOrFail($registrationId);

        // Assign registration details to component properties
        $this->surname = $details->surname;
        $this->othernames = $details->othernames;
        $this->email = $details->email;
        $this->phone = $details->phone;
        $this->address = $details->address;
        $this->learner_surname = $details->learner_surname;
        $this->learner_names = $details->learner_names;
        $this->dob = $details->dob;
        $this->previous_class = $details->previous_class;
        $this->remarks = $details->remarks;
    
    }
    public function update()
    {
        // Validate the form data
        $this->validate([
            'surname' => 'required|string|max:255',
            'othernames' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:255',
            'learner_surname' => 'required|string|max:255',
            'learner_names' => 'required|string|max:255',
            'dob' => 'required|date',
            'previous_class' => 'required|in:Pre Nursery,Play Group,Nursery,Reception,Grade 1,Grade 2,Grade 3,Grade 4,Grade 5,Grade 6',
            'remarks' => 'nullable|string',
        ]);

        // Find the registration and update it
        $registration = Registration::findOrFail($this->editId);
        $registration->update([
            'surname' => $this->surname,
            'othernames' => $this->othernames,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'learner_surname' => $this->learner_surname,
            'learner_names' => $this->learner_names,
            'dob' => $this->dob,
            'previous_class' => $this->previous_class,
            'remarks' => $this->remarks,
        ]);

        // Reset the form properties and close the modal
        $this->reset(['surname', 'othernames', 'email', 'phone', 'address', 'learner_surname', 'learner_names', 'dob', 'previous_class', 'remarks', 'editId']);
        session()->flash('success', 'Registration updated successfully.');
    }

    
    public function render()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $this->registrations = Registration::all();
        } else {
            abort(403, 'Unauthorized action.');
        }
        
        return view('livewire.registrations.show-all');
    }
}
