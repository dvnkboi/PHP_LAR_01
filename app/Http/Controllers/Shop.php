<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShopModel;

class Shop extends Controller
{
    public function init(){
        
        $shopM = new ShopModel;

        $shop = $shopM->getAll();
        return view('shop')->with('shop',$shop);

    }
}
