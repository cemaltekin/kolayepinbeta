<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class  AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin-master');

    }
    public function userView()
    {
        $users = DB::table('users')->where('deleted_at', '=', null)->get(); //tabloda deleted_at sütunu boş olanları çeker
        return view('users', compact('users'));
    }
    public function productView()
    {
        $products = DB::table('products')->where('deleted_at', '=', null)->get(); //tabloda deleted_at sütunu boş olanları çeker
        return view('product.products', compact('products'));
    }
    public function indexView()
    {
        return view('index');
    }
    public function delete($id)
    {
        DB::table('users')->where('id','=', $id)->update(['deleted_at' => Carbon::now()]);
        return redirect('users')->with('success', 'Başarıyla Silindi.!');


    }
    public function deleteproduct($id)
    {
        DB::table('products')->where('id','=', $id)->update(['deleted_at' => Carbon::now()]);
        return redirect('product-list')->with('success', 'Ürün Başarıyla Silindi.!');
    }
    public function register()
    {
    	return view('register');
    }
       public function create(Request $Request)
    {
 	   $data = $Request->all();
 	   $password = $Request->get('password');
 	   DB::table('users')->insert([
 	   	'name' => $Request->get('name'),
 	   	'email' => $Request->get('email'),
 	   	'password' => Hash::make($password),
 	   	'created_at' => Carbon::now(),
 	   ]);
 	   	return "<script>alert('KAYIT BAŞARIYLA TAMAMLANDI')</script>";
    }
    public function updateView($id)
    {
        $user=Db::table('users')->where('id',$id)->get();
        $user=$user->first();
        return view('update' , compact('user'));
    }
    public function updateproductView($id)
    {
        $product=Db::table('products')->where('id',$id)->get();
        $product=$product->first();
        return view('update-product' , compact('product'));
    }
    public function update(Request $Request,$id)
    {
       DB::table('users')->where('id' , $id)->update([
            'name' => $Request->get('name'),
            'email' => $Request->get('email'),
            'updated_at'=> Carbon::now()
        ]);
        return redirect('users')->with('success', 'Başarıyla Güncellendi.!');
    }

    public function updateproduct(Request $Request,$id)
    {
        DB::table('products')->where('id' , $id)->update([
            'urun' => $Request->get('urun'),
            'price' => $Request->get('price'),
            'updated_at'=> Carbon::now()
        ]);
        return redirect('product-list')->with('success', 'Ürün Başarıyla Güncellendi.!');
    }
    public function sendmail()
    {

        $users = DB::table('users')->orderByRaw('created_at DESC')->first();
        return view('email.register-mail',compact('users'));
    }
    public function mailview()
    {
        return view('email.register-mail');
    }
    public function profile()
    {
        return view('profile',array('user'=>Auth::user()));
    }
    public function update_avatar(Request $request)
    {
        if ($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/'. $filename));

            $user=Auth::user();
            $user->avatar=$filename;
            $user->save();
        }
        return view('profile',array('user'=>Auth::user()));
    }
}
