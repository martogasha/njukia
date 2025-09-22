<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Mpesa;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kopokopo\SDK\Helpers\Auth;
use Kopokopo\SDK\K2;
use Session;
class MpesaController extends Controller
{
    public function stkPush(){
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
            'firstName' => 'Jane',
            'lastName' => 'Doe',
            'currency'=>'KES',
            'phoneNumber' => '+254727995279',
            'amount' => 1,
            'email' => 'example@example.com',
            'callbackUrl' => 'https://iconztech.com/api/storeWebhooks',
            'accessToken' => $accessToken,
        ]);
        dd($result);
    }
    public function subscribe(){
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
        $webhooks = $K2->Webhooks();
        $response = $webhooks->subscribe([
            'eventType' => 'buygoods_transaction_received',
            'url' => 'https://iconztech.com/api/storeWebhooks',
            'scope' => 'till',
            'scopeReference' => '000798',
            'accessToken' => $accessToken,
        ]);
        $location = $response['location'];
        $stk = $K2->StkService();
        $options = [
            'location' => $location,
            'accessToken' => $accessToken,
        ];
        $response = $stk->getStatus($options);
        dd($response);
    }
    public function storeWebhooks(Request $request){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $checkouts = $cart->item;
        $userPhone = User::where('id', \Illuminate\Support\Facades\Auth::id())->first();
        $duplicate = $request->json()->all();
        $dub = array($duplicate);
        $input = array_unique($dub);
        $dateFormat = $input[0]['data']['attributes']['event']['resource']['origination_time'];
        $user = User::where('user_phone',$input[0]['data']['attributes']['event']['resource']['sender_phone_number'])->first();
        $store = Mpesa::create([
           'reference'=>$input[0]['data']['attributes']['event']['resource']['reference'],
           'status'=>$input[0]['data']['attributes']['event']['resource']['status'],
           'system'=>$input[0]['data']['attributes']['event']['resource']['system'],
           'amount'=>$input[0]['data']['attributes']['event']['resource']['amount'],
           'date'=>date("d-m-Y", strtotime($dateFormat)),
            'phone'=>$input[0]['data']['attributes']['event']['resource']['sender_phone_number'],
            'user_id'=>$user->id,
        ]);
        return view('customer.checkout')->with('success','PAYMENT RECEIVED');
    }
    public function authenticate(){
        global $K2;
        global $response;
        $webhooks = $K2->Webhooks();

        $json_str = file_get_contents('https://www.iconztech.com/api/storeWebhooks');
        $response = $webhooks->webhookHandler($json_str, $_SERVER['a419432d-284a-4688-9535-bcf7314c3639']);
        dd($response);
    }
    public function mpesaTransactions(){
        $transactions = Mpesa::all();
        return view('admin.mpesa',[
            'transactions'=>$transactions
        ]);
    }
}
