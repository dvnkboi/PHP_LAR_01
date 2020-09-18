<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartModel;
use Illuminate\Support\Facades\Auth;

class cart extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function init($inData){
        $data = explode("_",$inData);
        $cartItems = [];
        $userId = Auth::id();
        \array_splice($data, 0, 1);

        foreach ($data as $itemID) {
            $cartItems[] = ['id' => intval($userId), 'itemID' => intval($itemID)];
        }
        CartModel::insert($cartItems);
        return redirect()->action('cart@index');
    }

    public function index(){
        $cartM = new CartModel;
        $sum = 0;
        $cart = $cartM->getUserCart();
        foreach($cart as $cartItem){
            $sum+=$cartItem->price;
        }
        return view('cart')->with(['userCart' => $cart,'sum' => $sum]);
    }

    public function remove($inData){
        CartModel::where('itemID',$inData)->delete();
        return redirect()->action('cart@index');
    }

}
