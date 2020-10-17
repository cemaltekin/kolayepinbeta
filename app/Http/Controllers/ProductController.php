<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function productCreateView()
    {
        return view('product.create');
    }

    public function productCreate(Request $request)
    {
        $name = $request->get('urun');
        $gamename = $request->get('gamename');
        $price = $request->get('price');
        $filePhotoUrl = $request->file('photo');
        $user = Auth::user()->id;
        if (isset($filePhotoUrl)) {
            $productPhotoName = uniqid('product_') . '.' . $filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'), $productPhotoName);
        }
        Product::create([
            'urun' => $name,
            'gamename' => $gamename,
            'price' => $price,
            'photo' => $productPhotoName,
            'created_by' => $user,
            'updated_by' => $user
        ]);
        return redirect('urun-ekle')->with('success', 'Ürün Başarıyla Eklendi.!');
    }

    public function indexView()
    {
        $user = Auth::user()->id;
        $products = Product::with(['user'])->where('updated_by', '=', $user)->where('created_by', '=', $user)->where('deleted_at', '=', null)->get();
        return view('urun-ekle', compact('products'));
    }
}
