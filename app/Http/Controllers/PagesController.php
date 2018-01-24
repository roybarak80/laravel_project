<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends MainController
{
    public function index(){
        return view('home',['title'=>'home page']);
    }
    public function about(){
        return view('about',['title'=>'about page']);
    }
}