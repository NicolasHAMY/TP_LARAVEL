<?php

namespace App\Http\Controllers;

use App\shop;
use App\Repositories\ShopRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class ShopController extends Controller
{

    protected $ShopRepository;

    protected $nbrPerPage = 4;

    public function __construct(ShopRepository $ShopRepository)
    {
		$this->ShopRepository = $ShopRepository;
	}

	public function index()
	{
		$shop = $this->ShopRepository->getPaginate($this->nbrPerPage);
		$links = $shop->setPath('')->render();

		return view('Pageshop', compact('shop'));
	}
}
