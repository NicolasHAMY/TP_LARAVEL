
@extends('layouts.app')
@section("content")

			<div class="container">
              <div class="row">
                <div class="col-12">
					@foreach ($shop as $shop)
					    <div style="float: left">
							<div class="text-primary"><strong>{!! $shop->shop_Article_name !!}</strong></div>
							<div class="text-primary"><strong>{!! $shop->shop_Article_description !!}</strong></div>
							<div class="text-primary"><strong>{!! $shop->shop_Article_price !!}</strong></div>
                        </div>
					@endforeach
				    </div>
			    </div>
			</div>
@endsection
