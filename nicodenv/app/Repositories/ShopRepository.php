<?php

namespace App\Repositories;

use App\shop;

class ShopRepository
{
    protected $shop;

    public function __construct(shop $shop)
	{
		$this->shop = $shop;
	}
	public function getPaginate($n)
	{
		return $this->shop->paginate($n);
	}
    public function getById($shop_Article_id)
    {
    	return $this->shop->findOrFail($shop_Article_id);
    }
}
