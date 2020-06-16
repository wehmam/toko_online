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
                            <li class="list-group-item"><a href="">All</a></li>
                            <li class="list-group-item"><a href="">Pria</a></li>
                            <li class="list-group-item"><a href="">Wanita</a></li>
                        </ul>
                    </div>
                    <h2 id="category-label" class="text-center mt-5">Cari Produk</h2>
                    <form action="{{ url('/shop') }}" method="post" class="form-inline ml-5">
                        <input type="text" class="form-control" name="search">
                        <button type="submit" class="btn btn-primary ml-1">Cari</button>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="item-list">
                        <h2>Product</h2>
                        <hr style="margin-bottom:2px">
                        <div class="row list-product">
                            <div class="col-lg-4 item mb-5 mt-4">
                                <a href="/shop/detail">
                                    <img src="{{ asset('toko.jpg') }}" alt="Gambar" height="180" width="180">
                                </a>
                                <p class="product-name mt-3 font-weight-bold">
                                    <a href=""></a>
                                </p>
                                <p class="product-price">Rp.1000000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection