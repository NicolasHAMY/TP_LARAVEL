
@extends('layouts.app')
@section("content")

            <div class="cart">
              <a href="{{ url('/cart') }}"> <img class="img-cart" src="./images/white-cart.png"> </a>
            </div>

			<div class="container">
              <div class="row">
               <div class="col-12">

                  <h2 class="title-page">MA BOUTIQUE</h1>
              </div>
                <div class="shop col-12">
					@foreach ($shop as $shop)
					    <div class="box-article col-3"style="float: left">
					        <img class="img-article" href="{!! $shop->shop_Article_image !!}">
							<p class="line-article font-blue bold">{!! $shop->shop_Article_name !!}</p>
							<p class="line-article font-blue bold">{!! $shop->shop_Article_description !!}</p>
							<p class="line-article font-blue bold">{!! $shop->shop_Article_price !!}</p>
                            <button type="submit" class="btn font-blue-purple white">AJOUTEZ AU PANIER</button>
                        </div>
					@endforeach
				    </div>
			    </div>
			</div>
@endsection
