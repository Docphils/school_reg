<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use App\Models\RegisterForm as Registration;

class RegisterForm extends Component
{

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
  
    public function create(){
        $validatedData = $this->validate([
            'surname' => 'required|string',
            'othernames' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string|min:10',
            'learner_surname' => 'required|string',
            'learner_names' => 'required|string',
            'dob' => 'required|date',
            'previous_class' => 'required|in:Pre Nursery,Play Group,Nursery,Reception,Grade 1,Grade 2,Grade 3,Grade 4,Grade 5,Grade 6',
            'remarks' => 'nullable|string',
        ]);
        Registration::create($validatedData);
        $this->reset();
        session()->flash('success', 'Registration successful. Our admissions team will get in touch shortly.');
    }

    public function render()
    {
        return view('livewire.welcome.register-form');
    }
}
