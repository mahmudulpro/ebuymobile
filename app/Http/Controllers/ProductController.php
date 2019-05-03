<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use App\Order;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }
    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart= new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart', ['product'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function  getCheckout(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart', ['product'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }
    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_8zUfjosHtpPQfKPxNmAtsEIu");

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        try {
            $charge = \Stripe\Charge::create([
                'amount' => $cart->totalPrice * 100,
                'currency' => 'usd',
                'description' => 'Test charge',
                'source' => $token,
            ]);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        $order = new Order();
        $order->cart=serialize($cart);
        $order->card_email=$request->input('card_email');
        $order->payment_id=$charge->id;

        Auth::user()->orders()->save($order);

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully Purchase products!');

    }
}
