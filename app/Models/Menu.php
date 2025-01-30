<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'url',
        'parent_id',
        'order',
    ];

    // relation to fetch child menu
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order');
    }

    // relation to fetch parent menu
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
