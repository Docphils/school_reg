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

    public function show($registrationId)
    {
        $this->registrationId = $registrationId;
        $this->details = Registration::findOrFail($registrationId);
 
    }

    public function resetModal()
    {
        $this->registrationId = null;
        $this->details = null;
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
