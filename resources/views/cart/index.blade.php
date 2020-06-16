@extends('template.user')
@section('title','Halaman Cart')

@section('style')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
<div class="container">
    @if (Session::has('success'))
         <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @php
        // menset nilai awal ke nol karna belum memilih barang
        $total = 0;
    @endphp
    <p class="text-center">Cart Masih Kosong</p>
    <h3>Barang yang sudah dipilih</h3>
    <div class="cart">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('toko.jpg') }}" alt="" height="100">
            </div>
            <div class="col-lg-9">
                <div class="top">
                    <p class="item-name">Komputer</p>
                    <div class="top-right">
                        <p>Rp.10000000</p>
                        <select name="qty" id="qty" class="quantity">
                            <option value="">test</option>
                        </select>
                        <p class="total-item">Rp.2000000</p>
                    </div>
                </div>
                <hr class="mt-2 mb-2">
                <div class="bottom">
                    <div class="row">
                        <p class="col-lg-6 item-desc">
                            test
                        </p>
                        <div class="offset-lg-4">

                        </div>
                        <div class="col-lg-2">
                            <form action="" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="total2">
        <h4 class="total-price">
            Total Harga : Rp. 2014242424
        </h4>
    </div>
</div>
<form action="" method="POST" style="margin-left:400px">
    @csrf
    <button type="submit" class="btn btn-primary">Checkout</button>
</form>
@endsection

@section('script')
    
@endsection
