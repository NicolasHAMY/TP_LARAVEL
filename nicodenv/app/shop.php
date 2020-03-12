<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $table = 'shop';

    public $timestamps = false;

    protected $fillable = ['shop_article_name','shop_article_description','shop_article_price','shop_article_image'];
}
