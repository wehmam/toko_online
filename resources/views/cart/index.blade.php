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
    @foreach($cart as $carts)
        <div class="cart">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset($carts->product->image) }}" alt="" height="100">
                </div>
                <div class="col-lg-9">
                    <div class="top">
                        <p class="item-name">{{ $carts->product->name }}</p>
                        <div class="top-right">
                            <p>Rp. {{ number_format($carts->product->price) }}</p>
                            <select name="qty" id="qty" class="quantity" data-item="{{ $carts->id }}"   >
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}" {{ $carts->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            <p class="total-item">Rp. 2000.000</p>
                        </div>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="bottom">
                        <div class="row">
                            <p class="col-lg-6 item-desc">
                                {{ $carts->product->desc }}
                            </p>
                            <div class="offset-lg-4">

                            </div>
                            <div class="col-lg-2">
                                <form action="" method="POST">
                                    @csrf
                                    {{-- @method('patch') --}}
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="total2">
        <h4 class="total-price">
            Total Harga : Rp. 2014242424
        </h4>
    </div>
</div>
<form action="" method="POST" style="margin-left:400px">
    @csrf
    {{-- @method('patch') --}}
    <button type="submit" class="btn btn-primary">Checkout</button>
</form>
@endsection

@section('script')
    <script type="text/javascript">
        (function() {
            const classname = document.querySelectorAll('.quantity');

            Array.from(classname).forEach(function(element){
                element.addEventListener('change',function(){
                    const id = element.getAttribute('data-item');
                    axios.patch(`/cart/${id}}`, {
                        quantity: this.value,
                        id : id
                    })
                    // mereturn ketika diproses ke halaman tersebut lagi
                    .then(function(response){
                        window.location.href = '/cart'
                    })
                    // respon ketika error atau ada bug
                    .catch(function(error){
                        console.log(error)
                    })
                })
            })
        })();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
