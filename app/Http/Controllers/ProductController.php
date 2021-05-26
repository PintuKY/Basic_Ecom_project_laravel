<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
class ProductController extends Controller
{
   public function products(Request $req)
   {
       $data=Product::all();
       return view('product',['products'=>$data]);
   }

   public function details($id)
   {
        $data = Product::find($id);
        return view('detail',compact('data'));

   }
   public function AddToCart(Request $req)
   {
       if($req->session()->has('user'))
       {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/product');
       }
       else{
            return redirect('/login');
       }
   }
   public static function cartItem()
   {
       $userId=Session::get('user')['id'];
       return Cart::where('user_id',$userId)->count();
   }
   public function cartlist()
   {
       $userId=Session::get('user')['id'];
       $products=DB::table('carts')
       ->join('products','carts.product_id','=','products.id')
       ->where('carts.user_id',$userId)
       ->select('products.*','carts.id as cart_id')
       ->get();
       return view('Carts',compact('products'));
   }

   public function removeCart($id)
   {
       Cart::destroy($id);
       return redirect('/cartlist');
   }

   public function OrderNow()
   {
    $userId=Session::get('user')['id'];
     $total=DB::table('carts')
    ->join('products','carts.product_id','=','products.id')
    ->where('carts.user_id',$userId)
    ->sum('products.price');
    return view('Order',compact('total'));
   }

   public function OrderPlaced(Request $req)
   {
    $userId=Session::get('user')['id'];
    $allcart=Cart::where('user_id',$userId)->get();
    foreach($allcart as $cart)
    {
       $order = new Order;
       $order->product_id=$cart['product_id'];
       $order->user_id=$cart['user_id'];
       $order->status="pending";
       $order->payment_method=$req->payment;
       $order->payment_status="pending";
       $order->address=$req->address;
       $order->save();
       Cart::where('user_id',$userId)->delete();
    }
    $req->input();
    return redirect('/product');
   }

   public function MyOrder()
   {
    $userId=Session::get('user')['id'];
    $myorders =DB::table('orders')
   ->join('products','orders.product_id','=','products.id')
   ->where('orders.user_id',$userId)
   ->get();
   return view('Myorder',compact('myorders'));
  }
}
