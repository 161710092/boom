@extends('frontend.index')
@section('product')

@foreach($barangs as $data)
<div class="slide col-md-3">
	<div class="productImage clearfix">
		<img src="{{ asset('/img/'.$data->foto.'')}}" alt="featured-product-img" height="250px">
		<div class="productMasking">
			<ul class="list-inline btn-group" role="group">
				<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
				<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="fa fa-shopping-basket"></i></a></li>
				<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="productCaption clearfix">
		<a href="/product/{{ $data->slug }}">
			<h4>{{ $data->nama_barang }}</h4>
		</a>
		<h3>Rp. {{ $data->harga }}</h3>
	</div>
</div>
@endforeach

@endsection