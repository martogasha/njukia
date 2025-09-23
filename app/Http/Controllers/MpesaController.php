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
$mpesa= new \Safaricom\Mpesa\Mpesa();
$BusinessShortCode = '3539151';
$LipaNaMpesaPasskey = '2b1ea8f7b9c67373397e5b6f9b174cc156296ad66fee8a327b0b1a9635ddac7d';
$TransactionType = 'CustomerBuyGoodsOnline';
$Amount = '1';
$PartyA = '254707870863';
$PartyB = '3539151';
$PhoneNumber = '254707870863';
$CallBackURL = 'mylonixtech.co.ke/webhook';
$AccountReference = 'AccountReference';
$TransactionDesc = 'TransactionDesc';
$Remarks = 'Remarks';

$stkPushSimulation=$mpesa->STKPushSimulation(
    $BusinessShortCode,
    $LipaNaMpesaPasskey,
    $TransactionType, 
    $Amount, 
    $PartyA, 
    $PartyB, 
    $PhoneNumber, 
    $CallBackURL,
    $AccountReference, 
    $TransactionDesc, 
    $Remarks);
    dd($stkPushSimulation);

        return view('customer.checkout')->with('success','PAYMENT RECEIVED');
    }
    public function webhook(Request $request){
        log::info($request->all);
      
    }
    public function mpesaTransactions(){
        $transactions = Mpesa::all();
        return view('admin.mpesa',[
            'transactions'=>$transactions
        ]);
    }
}
