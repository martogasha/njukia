<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Order;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kopokopo\SDK\K2;
use Safaricom\Mpesa\Mpesa;
use Session;

class   CheckoutController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $user = User::where('id',Auth::id())->first();
        $categories = Category::all();
        return view('customer.checkoutOne',[
                'products'=>$cart->item,
                'categories'=>$categories,
                'totalPrice'=>$cart->totalPrice,
                'user'=>$user
            ]);
    }
    public function placeOrder(Request $request)
    {
        if (Auth::check()){
            $oldCart = Session::get('cat');
            $cart = new Cat($oldCart);
            $checkouts = $cart->item;
            $userPhone = User::where('id', Auth::id())->first();

            if ($request->cash =='mpesa'){

                // Do not hard code these values
                $options = [
                    'clientId' => 'J6IUCHendZ4SbNEAF6WWJZIFcKR2LCmy5hmrlkIVHcU',
                    'clientSecret' => 'IDbzppyG-fXTgClVemBnh2irjcfUG_s8E4AD3xELMO4',
                    'apiKey' => 'a3ee4134cc102a400aef96c3c9d1a635829f54d2',
                    'baseUrl' => 'https://api.kopokopo.com'
                ];
                $K2 = new K2($options);
                $tokens = $K2->TokenService();
                $result = $tokens->getToken();
                $access = $result['data'];
                $accessToken = $access['accessToken'];
                $stk = $K2->StkService();
                $result = $stk->initiateIncomingPayment([
                    'paymentChannel' => 'M-PESA STK Push',
                    'tillNumber' => 'K967143',
                    'firstName' => $request->name,
                    'lastName' => 'Doe',
                    'currency'=>'KES',
                    'phoneNumber' => $request->phone,
                        'amount' => $request->amount,
                    'email' => $request->email,
                    'callbackUrl' => 'https://iconztech.com/api/storeWebhooks',
                    'accessToken' => $accessToken,
                ]);
                foreach ($checkouts as $checkout) {
                    $phone = $request->phone;
                    $order = new Order();
                    $order->user_id = \Illuminate\Support\Facades\Auth::id();
                    $order->product_id = $checkout['item']['id'];
                    $order->order_quantity = $checkout['quantity'];
                    $order->order_status = 'Mpesa';
                    $order->order_status1 = 'Awaiting Confirmation';
                    $order->save();
                }
                $request->session()->forget('cat');
                return redirect()->back()->with('success','INPUT PIN');
            }
        }
        else{
            return redirect(url('Login'));
        }
    }
     public function placeOrderOne()
    {
   
        $request->session()->forget('cat');
         
    }
    public function success(Request $request){
        
        $request->session()->forget('cat');
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $categories = Category::all();
        return view('customer.success',[
            'products'=>$cart->item,
            'categories'=>$categories,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }
}
