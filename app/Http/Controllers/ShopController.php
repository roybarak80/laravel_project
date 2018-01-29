<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorie;
use App\Product;

class ShopController extends MainController
{
    public function categories()
    {

        self::$data['title'] = 'Shop Categories';
        self::$data['categories'] = Categorie::all()->toArray();
        //$cat =Categorie::all()->toArray();
        //update_at" => "2016-07-27 00:00:00"
        //::where('column', 'LIKE', '%value%')->get();
        // $cat =Categorie::where('update_at', 'LIKE', '%2016%')->get()->toArray();
        // dd($cat);
        return view('content.categories', self::$data);
    }

    public function products($category_url)
    {

        Product::getProducts($category_url, self::$data);

        return view('content.products',self::$data);

    }

    public function item($categorie_url, $product_url)
    {
        Product::getProduct($product_url, self::$data);

        return view('content.item',self::$data);


    }

    public function addToCart() {

        echo 123;
    }

}