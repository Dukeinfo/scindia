<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ViewNewsEvent extends Component
{
    public function render()
    {
        return view('livewire.frontend.view-news-event')->layout('layouts.frontend');
    }
}
