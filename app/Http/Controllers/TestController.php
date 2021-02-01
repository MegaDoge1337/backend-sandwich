<?php

namespace App\Http\Controllers;

use App\Models\DTO\ProductsListDTO;
use App\Models\ProductsList;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $productListDTO = new ProductsListDTO();
        $productListDTO->store();
        var_dump($productListDTO->toJSON());
        return view('test');
    }
}
