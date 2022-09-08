<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubComponent extends Component
{
    public function mount()
    {
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.sub-component');
    }
}
