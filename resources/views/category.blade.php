@extends('layouts.front')

@section('page')
    <div class="container">
        <div class="row">
            @if(count($products) != 0 )
            <p id="search_head">Showing {{count($products)}} results for Category: {{$category}} </p>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="books-item">
                            <div class="books-item-thumb">
                                <img src="{{ asset($product->image) }}" alt="book">
                                <div class="new">New</div>
                                <div class="sale">Sale</div>
                                <div class="overlay overlay-books"></div>
                            </div>

                            <div class="books-item-info">
                                <a href="{{ route('product.single', ['id' => $product->id ]) }}">
                                    <h5 class="books-title">{{ $product->name }}</h5>
                                </a>

                                <div class="books-price">${{ $product->price }}</div>
                            </div>

                            <a href="{{ route('cart.rapid.add', ['id' => $product->id ]) }}" class="btn btn-small btn--dark add">
                                <span class="text">Add to Cart</span>
                                <i class="seoicon-commerce"></i>
                            </a>

                        </div>
                    </div>
                @endforeach

            <div class="row">

                <div class="col-lg-12">{{ $products->links()  }}</div>

            </div>
            @else
            <p>No results</p>
            @endif
        </div>
        </div>
    </div>
@endsection