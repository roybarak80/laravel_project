<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   static public function getProducts($category_url, &$data){

       $data['products'] =[];


       $caterory = Categorie::where('url','=',$category_url)->get();
       if($caterory = $caterory->toArray()){
            $data['title'] = $caterory[0]['title'].' products';
            $data['cat_url'] = $category_url;
           $products = Categorie::find($caterory[0]['id'])->products;

           if( $products ) {
               $data['products'] = $products->toArray();

           }

       }




   }

   static public function getProduct($product_url, &$data){

       $product = Product::where('url', '=',$product_url)->get();
       if($product = $product->toArray()){
           dd($product);
           $data['product'] = $product;
       }
   }
}
