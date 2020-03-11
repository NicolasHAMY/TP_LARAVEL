<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $table = 'shop';

    public $timestamps = false;

    protected $fillable = ['shop_Article_name','shop_Article_description','shop_Article_price'];
}
