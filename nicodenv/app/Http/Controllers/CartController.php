<?php

namespace App\Http\Controllers;

use App\shop;
use App\Repositories\ShopRepository;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class CartController extends Controller
{

        protected $ShopRepository;

        protected $nbrPerPage = 4;


    public function addToCart(Request $request)
    {
        $cart = request();
        $cart->toArray(['shop_Article_id' => ['quantity'=>'value']]);

        $minutes = 1;
        $response = new Response('');
        $response->withCookie(cookie('CookieCart', $cart, $minutes));

        return Redirect()->back()->with(['message' => 'Enregistrer dans le panier']);
    }

    public function __construct(ShopRepository $ShopRepository)
    {
		$this->ShopRepository = $ShopRepository;
	}

    public function getCookie(Request $request)
    {
        $value = $request->cookie('CookieCart');
		$shop = $this->ShopRepository->getById($value);

		return view('PageCart',  compact('shop'));
    }
}
