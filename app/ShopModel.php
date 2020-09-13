<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShopModel extends Model
{
    //
    protected $table = 'Shop';
    
    public function getFeatured(){
        $feat = DB::table('Shop')->where('featured',TRUE)->get();
        return $feat;
    }

    public function getAll(){
        $shop = DB::table('Shop')->get();
        return $shop;
    }
}
