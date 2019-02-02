<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    //
    protected $table = 'shopping_list';
    protected $fillable = ['product_name', 'quantity', 'recipient'];


}
