<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        return view('cart.index',compact('cart'));
    }
    public function store(Request $request){
        Cart::create([
            'user_id'=> Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => 1
        ]);
        return redirect('/cart');
    }
    
    public function update(Request $request,$id){
        Cart::where('id',$id)->update([
            'qty' => $request->quantity
        ]);
        return response()->json([
            'success' => true
        ]);
    }
}
