<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    public function model(array $selec)
    {
        return new Product([
            'photo'=>$selec[0],
            'gamename' => $selec[1],
            'urun' => $selec[2],
            'price' => $selec[3]
        ]);
    }
}
