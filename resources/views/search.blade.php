@extends('layouts.front')

@section('page')
    <div class="container">
        <div class="row">
            @if(count($products) != 0 )
            <p id="search_head">Showing {{count($products)}} results for keyword: {{$search_keyword}} </p>

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
            <p id="no_results">No results for keyword: {{$search_keyword}} <br> please try another keywords </p>
            <form action="{{ route('product.search') }}" method="POST" role="search" id="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" id="search_input" name="q" placeholder="Search products"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                    </span>
                </div>
            </form>
            @endif
        </div>
        </div>
    </div>
@endsection