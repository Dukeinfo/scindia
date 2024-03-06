<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ViewAllNotice extends Component
{
    public function render()
    {
        return view('livewire.frontend.view-all-notice')->layout('layouts.frontend');
    }
}
