
@extends('layouts.app')
@section("content")

			<div class="container">
              <div class="row">
                <div class="col-12">
					@foreach ($shop as $shop)
					    <div class="article col-3"style="float: left">
							<p class="font-blue"><strong>{!! $shop->shop_Article_name !!}</p>
							<p class="text-primary"><strong>{!! $shop->shop_Article_description !!}</p>
							<p class="text-primary"><strong>{!! $shop->shop_Article_price !!}</p>
                        </div>
					@endforeach
				    </div>
			    </div>
			</div>
@endsection
