<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //

    function index()
    {
       // return "welcome to product page ";
       $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
      $data= Product::find($id);
      return view('detail',['products'=>$data]);
    }
    function search(Request $req)
    {
       $data = Product::where('name','like','%'.$req->input('query').'%')->get();

        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
       // return "rafat";
        if($req->session()->has('user'))
        {
            $cart= new cart;
            $cart->user_id=$req->session()->get('user')['id'];

            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }

    }

   static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartlist()
    {
        $userId=Session::get('user')['id'];
        $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*')
        ->where('cart.user_id',$userId)
        ->get();

        return view('cartlist',['products=>$data']);

    }

    function list($id = null)
    {
        return $id?product::find($id):product::all();
    }

    function find_product($name)
    {
        return Product::where('name',$name)->first();
    }

    function add(Request $req){
        $product = new Product;

        $product->name=$req->name;
        $product->price=$req->price;
        $product->category=$req->category;
        $product->gallery=$req->gallery;
        $product->description=$req->description;

        $result=$product->save();
        if($result){
            return ["result"=>"data has been saved"];
        }else{
            return ["result"=>"data not found"];
        }

    }

    function update(Request $req){
        $product= Product::find($req->id);
        $product->name=$req->name;
        $product->price=$req->price;
        $product->category=$req->category;
        $product->gallery=$req->gallery;
        $product->description=$req->description;

        $result=$product->save();
        if($result){
            return ["result"=>"data Updated"];
        }else{
            return ["result"=>"data is same"];
        }

    }

    function search_now($name)
    {
        return Product::where("name","like","%".$name."%")->get();

    }
}
