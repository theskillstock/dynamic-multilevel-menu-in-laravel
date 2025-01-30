<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class ActionhandlerController extends Controller
{
    // function to delete a menu record

    public function deleteMenu($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $menu->delete();
            return redirect()->route('menu.list')->with('message', 'Menu record deleted');
        } else {

            return redirect()->route('menu.list')->with('error', 'Menu not found');
        }
    }
}
