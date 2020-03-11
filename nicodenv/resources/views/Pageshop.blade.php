
@extends('layouts.app')
@section("content")

			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nom</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>

					@foreach ($shop as $shop )
						<tr>
							<td>{!! $shop->shop_Article_id !!}</td>
							<td class="text-primary"><strong>{!! $shop->shop_Article_name !!}</strong></td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
@endsection
