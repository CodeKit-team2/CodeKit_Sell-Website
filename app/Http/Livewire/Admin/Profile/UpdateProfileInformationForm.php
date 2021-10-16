<?php

namespace App\Http\Livewire\Admin\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateProfileInformationForm extends Component
{
    public $state = [];

    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    public function render()
    {
        return view('livewire.admin.profile.update-profile-information-form');
    }
}
