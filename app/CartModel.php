<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartModel extends Model
{
    //
    protected $table = 'cart';

    public function add($insertData){
        DB::insert($insertData);
    }

    public function getUserCart(){
        $cart = DB::select('select DISTINCT S.itemID,S.name,S.company,S.color,S.stock,S.featured,S.price,S.spec1,S.spec2,S.spec3 from shop S,cart C where id= :userID and C.itemID = S.itemID',['userID' => Auth::id()]);
        return $cart;
    }
}
