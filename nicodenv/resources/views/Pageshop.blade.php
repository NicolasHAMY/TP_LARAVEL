
@extends('layouts.app')
@section("content")

            <div class="cart">
              <a href="{{ url('/PageCart') }}"> <img class="img-cart" src="./images/white-cart.png"> </a>
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
							<form action="{!! url('addToCardForm') !!}">
							    <select name="quantity" autocomplete="off" id="quantity" tabindex="0" class="a-native-dropdown">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                /select>
							    <input type="hidden" name="article_id" value={!! $shop->shop_Article_id !!}>
                                <button type="submit" class="btn font-blue-purple white">AJOUTEZ AU PANIER</button>
                            </form>
                        </div>
					@endforeach
				    </div>
			    </div>
			</div>
@endsection
