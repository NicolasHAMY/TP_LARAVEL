
@extends('layouts.app')
@section("content")

@foreach ($shop as $shop)
					    <div class="box-article col-3"style="float: left">
					        <img class="img-article" href="{!! $shop->shop_Article_image !!}">
							<p class="line-article font-blue bold">{!! $shop->shop_Article_name !!}</p>
							<p class="line-article font-blue bold">{!! $shop->shop_Article_description !!}</p>
							<p class="line-article font-blue bold">{!! $shop->shop_Article_price !!}</p>
					</div>
@endforeach
@endsection
