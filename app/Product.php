<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function products($category_url){
       return $this->hasMany('App/Product');
   }
}
