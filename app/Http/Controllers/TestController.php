<?php

namespace App\Http\Controllers;

use App\Models\ProductsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function test()
    {
        $products = array();

        foreach (ProductsList::get()->all() as $productDTO)
        {
            $product = array();
            $product['title_ru'] = $productDTO['title_ru'];
            $product['title_en'] = $productDTO['title_en'];
            $product['image_path'] = $productDTO['image_path'];
            $product['icon_path'] = $productDTO['icon_path'];

            array_push($products, $product);
        }

//        var_dump($products[0]['image_path']);
//        var_dump(Storage::get('public/' . $products[0]['image_path']));

        $url = Storage::disk('public')->url($products[0]['image_path']);
        $path = public_path();

        echo $path;

        return response()->json(Storage::disk('public')->url($products[0]['image_path']));
    }
}
