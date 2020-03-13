<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $table = 'shop';

    public $timestamps = false;

    protected $primaryKey = 'shop_Article_id';

    protected $fillable = ['shop_Article_id','shop_Article_name','shop_Article_description','shop_Article_price'];
    protected $fillable = ['shop_article_name','shop_article_description','shop_article_price','shop_article_image'];
}
