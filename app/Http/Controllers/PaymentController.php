<?php

namespace App\Http\Controllers;
use PaytmWallet;
use App\Models\Payment;
use Auth;
use App\Models\job;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function order($job_id)
    {
        $payment = PaytmWallet::with('receive');
        $id = "ORDIDBR".rand(1,9999);
        $job  = Job::find($job_id);
        $user = Auth::user();
        $payment->prepare([
          'order' => $id,
          'user' => $user->id,
          'mobile_number' => 9546805580,
          'email' => $user->email,
          'amount' => $job->reg_fee,
          'callback_url' => route('payment.callback')
        ]);

        $pay = new Payment();
        $pay->orderid = $id;
        $pay->user_id = $user->id;
        $pay->txnamount = $job->reg_fee;
        $pay->job_id = $job_id;
        $pay->save();


        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');

        $response = $transaction->response();
        $payment = Payment::where("orderid",$transaction->getOrderId())->first();

        $payment->banktxn = $response["BANKTXNID"];
        $payment->txnid = $response['TXNID'];
        $payment->paymentmode = $response['PAYMENTMODE'];
        $payment->status = $response['STATUS'];
        $payment->save();

        if($transaction->isSuccessful()){
            return redirect()->route('home');

        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }

    }
}
