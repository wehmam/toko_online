@extends('template.user')
@section('title','Halaman Shop')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="category">
                        <h2 id="category-label">Kategori</h2>
                        
                        <ul class="list-group">
                            <li class="list-group-item {{ !$id ? 'active' : '' }}"><a href="{{ route('shop') }}">All</a></li>
                            @foreach($category as $categorys)
                                <li class="list-group-item {{ $categorys->id == $id ? 'active' : '' }}"><a href="{{ route('kategori',$categorys->id) }}">{{ $categorys->nama }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <h2 id="category-label" class="text-center mt-5">Cari Produk</h2>
                    <form action="{{ url('/shop') }}" class="form-inline ml-5 mb-5">
                        <input type="text" class="form-control" name="search">
                        <button type="submit" class="btn btn-primary ml-1">Cari</button>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="item-list">
                        <h2>Product</h2>
                        <hr style="margin-bottom:2px">
                        <div class="row list-product">
                            @foreach($product as $products)
                                <div class="col-lg-4 item mb-5 mt-4">
                                    <a href="{{ route('show',$products->id) }}">
                                        <img src="{{ $products->image }}" alt="Gambar" height="180" width="180">
                                    </a>
                                    <p class="product-name mt-3 font-weight-bold">
                                        <a href="">{{ $products->name }}</a>
                                    </p>
                                    <p class="product-price">Rp. {{ number_format($products->price) }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $product->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection