<?php
namespace App\Helpers;
use App\Models\Message;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\Shipping;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

// use Auth;
class Helper{
    public static function getAllProductFromCart($user_id=''){
        if(Auth::check()){
            if($user_id=="")
            $user_id=auth()->user()->id;
            return Cart::with('product')->where('user_id',$user_id)->where('order_id',null)->get();
        }
        else{
            return 0;
        }
    }
}
?>
