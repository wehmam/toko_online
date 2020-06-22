<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;   
use App\Transaction;



class CheckoutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(){
        $carts = Cart::where('user_id',Auth::user()->id);

        $cartUser = $carts->get();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);
        foreach($cartUser as $cart){
            $transaction->detail()->create([
                'product_id' => $cart->product_id,
                'qty' => $cart->qty
            ]);
        }

        // menghapus data di $carts agar ketika di cek sudah selesai dan terdaftar di detail
        $carts->delete();
        return redirect('/');
    }
}
