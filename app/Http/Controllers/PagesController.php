<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends MainController
{
    
    public function index(){
        
        return view('home', self::$data);
    }
    public function about(){
        self::$data['title'] = 'about page';
        return view('about',self::$data);
    }
    public function contact(){
        self::$data['title'] ='contact page';
        return view('contact',self::$data);
    }
    public function shop(){
        self::$data['title'] ='shop page';
        return view('shop',self::$data);
    }
}