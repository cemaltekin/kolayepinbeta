<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Products;

class GameController extends Controller
{
    public function gameView($name)
    {
        $contents=Product::where('gamename', '=', $name)->get();
        return view('GameProduct.gameView', compact('contents'));

    }
    public function siparisView()
    {
        $siparisler=DB::table('orders')
            ->join('users','orders.user_id','=','users.id')
            ->join('products','orders.product_id','=','products.id')
            ->select()->get();
        return view('siparis', compact('siparisler'));
    }
    public function siparis($product_id)
    {
        $siparis_ekleme=DB::table('orders')->insert([
            'user_id'=>Auth::user()->id,
            'product_id'=>$product_id,
            'created_at' => Carbon::now()
        ]);
        return redirect('/')->with('success', 'Sipariş Oluşturuldu.!');
    }
}
