<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductsList;
use Illuminate\Http\JsonResponse;

class ProductListController extends Controller
{
    public function store() : JsonResponse // from ORM
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

        return response()->json($products);
    }
}
