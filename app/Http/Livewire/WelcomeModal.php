<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WelcomeModal extends signupModal
{
    public function render()
    {
        return view('livewire.welcome-modal');
    }
    public $message = '';

public function mount()
{
  $this->message = 'Welcome to the reusable modal example';
}
}
