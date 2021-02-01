<?php

namespace App\Models\DTO;

use App\Models\ProductsList;

class ProductsListDTO
{
    protected array $products = [];

    public function store() // from ORM
    {
        foreach (ProductsList::get()->all() as $productData)
        {
            $product = array();
            $product['title_ru'] = $productData['title_ru'];
            $product['title_en'] = $productData['title_en'];
            $product['image_path'] = $productData['image_path'];
            $product['icon_path'] = $productData['icon_path'];

            array_push($this->products, $product);
        }
    }

    public function toJSON()
    {
        return json_encode($this->products);
    }
}
