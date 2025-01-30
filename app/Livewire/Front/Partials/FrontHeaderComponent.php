<?php

namespace App\Livewire\Front\Partials;

use App\Models\Menu;
use Livewire\Component;

class FrontHeaderComponent extends Component
{
    public $menus;
    public function mount()
    {
        $this->menus = Menu::orderBy('order', 'asc')->with('children')->get();
    }
    public function render()
    {
        return view('livewire.front.partials.front-header-component');
    }
}
