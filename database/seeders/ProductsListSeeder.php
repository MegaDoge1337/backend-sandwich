<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = array_map('str_getcsv', file(dirname(__FILE__) . '/../../resources/csv/allIngridients.csv'));
        foreach ($csv as $productList) {
            foreach ($productList as $product) {
                $csvLine = str_getcsv($product, $separator = ";");
                DB::table('products_lists')->insert([
                    "title_ru" => $csvLine[0],
                    "title_en" => $csvLine[1],
                    "image_path" => $csvLine[2],
                    "icon_path" => $csvLine[3]
                ]);
            }
        }
    }
}
