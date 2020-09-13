<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShopModel;

class Home extends Controller
{
    public function init(){

        $shopM = new ShopModel;

        $shop = $shopM->getFeatured();
        return view('home')->with('featured',$shop);
    }
}
