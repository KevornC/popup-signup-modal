<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SignupModal extends Component
{
    public $show = false;

protected $listeners = [
  'show' => 'show'
];

public function show()
{
  $this->show = true;
}
}
