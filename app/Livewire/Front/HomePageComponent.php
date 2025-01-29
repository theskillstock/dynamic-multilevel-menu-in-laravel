<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.front')]
class HomePageComponent extends Component
{
    public function render()
    {
        return view('livewire.front.home-page-component');
    }
}
