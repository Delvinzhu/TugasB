<?php

namespace App\Http\Controllers;
use App\Http\Requests\CartRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Transaction;
use Auth;
use Cookie;

class CartController extends Controller
{

    public function index(){
        $carts = json_decode(request()->cookie('carts'), true);
        //UBAH ARRAY MENJADI COLLECTION, KEMUDIAN GUNAKAN METHOD SUM UNTUK MENGHITUNG SUBTOTAL
        $subtotal = collect($carts)->sum(function($q) {
            return $q['quantity'] * $q['price']; //SUBTOTAL TERDIRI DARI QTY * PRICE
        });
        return view('cart.index', compact('carts','subtotal'));
    }

    public function add(CartRequest $request){

        $carts = json_decode($request->cookie('carts'), true);

        if ($carts && array_key_exists($request->product_id, $carts)) {
            //MAKA UPDATE QTY-NYA BERDASARKAN PRODUCT_ID YANG DIJADIKAN KEY ARRAY
            $carts[$request->product_id]['quantity'] += $request->quantity;
        } else {
            $product = Product::find($request->product_id);
            $carts[$request->product_id] = [
                'quantity' => $request->quantity,
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image
            ];
        }
        $cookie = cookie('carts', json_encode($carts), 10080);
        return redirect()->back()->with('message', 'Has beed added to chart')->cookie($cookie);
    }

    public function update(Request $request){

        $carts = json_decode(request()->cookie('carts'), true);

        foreach ($request->product_id as $key => $row) {

            if ($request->quantity[$key] == 0) {

                unset($carts[$row]);
            } else {

                $carts[$row]['quantity'] = $request->quantity[$key];
            }
        }

        $cookie = cookie('carts', json_encode($carts), 10080);

        return redirect()->back()->cookie($cookie);
    }

    public function checkout($subtotal){
        $carts = json_decode(request()->cookie('carts'), true);
        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'total'   => $subtotal
        ]);

        foreach($carts as $c){
            Cart::create([
                'transaction_id' => $transaction->id,
                'user_id'        => Auth::user()->id,
                'product_id'     => $c['product_id'],
                'quantity'       => $c['quantity'],
            ]);
        }

        $cookie = cookie('carts', json_encode([]), 2880);

        return redirect()->back()->with('message', 'Has been Chekouted')->cookie($cookie);
    }

    public function history(){
        $data = Transaction::all()->sortByDesc('created_at');
        return view('transaction.index',compact('data'));
    }

    public function detailHistory($id){
        $data = Transaction::find($id);
        return view('transaction.show',compact('data'));
    }
}
