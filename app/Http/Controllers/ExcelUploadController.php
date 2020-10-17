<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use App\Imports\UserImport;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelUploadController extends Controller
{
    public function userImportView()
    {
        return view('userupload');
    }

    public function userImport()
    {
        Excel::import(new UserImport, request()->file('file'));

        return redirect('user-import')->with('success', 'Kullanıcılar Eklendi.!');
    }
    public function productImportView()
    {
        return view('productupload');

    }

    public function productImport()
    {
        Excel::import(new ProductImport(), request()->file('file'));

        return redirect('product-import')->with('success', 'Ürünler Eklendi.!');
    }
}
