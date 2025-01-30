<?php

namespace App\Livewire\Front\Menu;

use Livewire\Component;
use App\Models\Menu;
class MenuEditComponent extends Component
{
    public $title, $url, $parent_id, $order, $menuId;
    public $menus;
    public function mount($id)
    {
        $menu = Menu::find($id);
        $this->title = $menu->title;
        $this->url = $menu->url;
        $this->order = $menu->order;
        $this->parent_id = $menu->parent_id;
        $this->menuId = $menu->id;

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

        $menu = Menu::find($this->menuId);
        $menu->title = $this->title;
        $menu->url = $this->url;
        $menu->parent_id = $this->parent_id;
        $menu->order = $this->order;
        $menu->save();
        // Clear input fields after successful save
        $this->reset(['title', 'url', 'parent_id', 'order']);

        return redirect()->route('menu.list')->with('info', 'Menu Updated');

    }
    public function render()
    {
        return view('livewire.front.menu.menu-edit-component');
    }
}
