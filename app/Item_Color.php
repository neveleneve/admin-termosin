<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Color extends Model
{
    protected $table = 'item_color';
    protected $fillable = [
        'id_item',
        'warna'
    ];
}
