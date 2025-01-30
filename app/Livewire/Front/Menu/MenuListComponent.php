<?php

namespace App\Livewire\Front\Menu;

use App\Models\Menu;
use Livewire\Component;

class MenuListComponent extends Component
{
    public $title, $url, $parent_id, $order;
    public $menus;
    public function mount()
    {
        $this->menus = Menu::orderBy('created_at', 'desc')->with(['children', 'parent'])->get();
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'url' => 'required|string|max:255',
        'order' => 'required',
        'parent_id' => 'nullable|exists:menus,id',
    ];

    public function storeMenu()
    {
        $this->validate();

        Menu::create([
            'title' => $this->title,
            'url' => $this->url,
            'order' => $this->order,
            'parent_id' => $this->parent_id,
        ]);
        // Clear input fields after successful save
        $this->reset(['title', 'url', 'parent_id', 'order']);

        return redirect()->route('menu.list')->with('message', 'Menu added');

    }

    public function render()
    {
        return view('livewire.front.menu.menu-list-component');
    }
}
