<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorie;

class ShopController extends MainController
{
    public function categories(){
       
        self::$data['title'] = 'Shop Categories';
        self::$data['categories'] =  Categorie::all()->toArray();
        //$cat =Categorie::all()->toArray();
        //update_at" => "2016-07-27 00:00:00"
      //::where('column', 'LIKE', '%value%')->get();
     // $cat =Categorie::where('update_at', 'LIKE', '%2016%')->get()->toArray();
       // dd($cat);
       return view('content.categories', self::$data);
    }

    public function products($category_url){
       
        echo $category_url;
       // self::$data['title'] = 'Shop Categories';
     
      // return view('content.categories', self::$data);
    }
}