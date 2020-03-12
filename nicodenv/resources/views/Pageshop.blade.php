
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
					    <div class="box-article col-3">
                            <div>
                                <img class="img-article" src="{!! $shop->shop_article_image !!}"></img>
                                <p class="line-article font-blue bold">{!! $shop->shop_article_name !!}</p>
                                <p class="line-article font-blue bold">{!! $shop->shop_article_description !!}</p>
                                <p class="line-article font-blue bold">{!! $shop->shop_article_price !!} € </p>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-submit-cart font-blue-purple white">AJOUTEZ AU PANIER</button>
                            </div>
                        </div>
					@endforeach
				    </div>
			    </div>
			</div>
@endsection
