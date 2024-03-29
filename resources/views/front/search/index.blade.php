@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7">
    <div class="container-fluid">
        <div class="page-content">
            <div class="container">
                @if(!isset($products) || $products->count() < 1)
                     <h3>No result</h3>
                @else
                <div class="products">
                    <div class="row">
                        @foreach($products as $product)

                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="{{ route('product_show', ['category' => $product->category_slug, 'product'=> $product->product_slug]) }}">
                                        <img src="{{ asset('storage/uploads/products/' . $product->product_img) }}" alt="Product image" class="product-image">
                                    </a>
                                </figure>
                                <div class="product-body">
                                    <h3 class="product-title" style="max-height: 80px; overflow-y: hidden">
                                        <a href="{{ route('product_show', ['category' => $product->category_slug, 'product'=> $product->product_slug]) }}">
                                            {{ $product->product_name }}
                                        </a>
                                    </h3>
                                    <div class="product-price">
                                        {{ $product->product_price }}сомон
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if($products->count() > 12)
                    <div class="load-more-container text-center">
                        <a href="#" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a>
                    </div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection