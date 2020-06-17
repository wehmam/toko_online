@extends('template.user')

@section('title','Toko Klontong')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
<div class="container">
        <h2 class="title">{{ $product->name }}</h2>
        <hr>
    <div class="row">
        <div class="wrapper">
            <div class="col-lg-4">
                <img src="{{ asset($product->image) }}" alt="Gambar" height="200" width="200">
            </div>
        </div>
        <div class="col-lg-4 desc">
            <h4 id="description">Deskripsi</h4>
            <p>{{ $product->desc }}</p>
        </div>
        <div class="col-lg-4">
            <div class="kartu">
                <p>Harga</p>
                <h2>Rp. {{ number_format($product->price,2,",",".") }}</h2>
                <form action="{{ url('/cart/store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" id="">
                    <input type="submit" class="btn btn-primary" value="Masukkan Ke cart">
                </form>
            </div>
        </div>
    </div>
</div>
    <footer class="footer-distributed">
        <div class="footer-right">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>     
        </div>
        <div class="footer-left">
            <p class="footer-links">
                <a href="" class="link-1">Home</a>
                <a href="">Shop</a>
                <a href="">About</a>
                <a href="">FAQ</a>
            </p>
        </div>
    </footer>
@endsection

@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection