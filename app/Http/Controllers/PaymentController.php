<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use PayPal\Api\Plan;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Details;
use PayPal\Api\Sale;
use PayPal\Api\Refund;


use Paypalpayment;

use Auth;


class PaymentController extends BaseController
{

	/**
	 * 
	 */
	public function __construct()
    {  
    	
    }

    /**
     * 
     */
    public function getPayPal()
    {
    	$sdkConfig = array(
            "mode" => "sandbox"
        );

        $apiContext = new ApiContext(new OAuthTokenCredential(config("paypal_payments.Account.paypal_client_id"), config("paypal_payments.Account.paypal_client_secret")));;

        $apiContext->setConfig($sdkConfig);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $maxPrice = 0;
        $shippingAmount = '500';
        $transactionArr = [];
        $maxPrice += $shippingAmount;
        
        $amount = new Amount();
        $amount->setCurrency('USD');
        $amount->setTotal($maxPrice);

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $redirectUrls = new RedirectUrls();
        
        $redirectUrls->setReturnUrl(action('PaymentController@getPaypalReturnResponse'));
        $redirectUrls->setCancelUrl(action('PaymentController@getPaypalCancelResponse'));

        $payment = new Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));
      
        $response = $payment->create($apiContext);
        $redirectUrl = $payment->getApprovalLink();
        dd($response);
        return redirect()->to($redirectUrl);

       //  $details = new Details();

       //  // $details->setShipping('2.00')
       //  //     ->setTax('0.00')
       //  //     ->setSubtotal('100.00');

       //  $amount = new Amount();
       //  //$amount->setCurrency('USD');
       //  //$amount->setTotal($maxPrice);
       //  $amount->setCurrency('USD')
       //      ->setTotal('102.00');
       //      //->setDetails($details)

       //  $transaction = new Transaction();
       //  $transaction->setAmount($amount);
       //  // $transaction->setDescription('ifyoucan');
       //  $transaction->setCustom(json_encode(['user_id' => Auth::id()]));

       //  $redirectUrls = new RedirectUrls();
       //  $redirectUrls->setReturnUrl(action('PaymentController@getPaypalReturnResponse'));
       //  $redirectUrls->setCancelUrl(action('PaymentController@getPaypalCancelResponse'));

       //  $payment = new Payment();
       //  $payment->setIntent('sale');
       //  $payment->setPayer($payer);
       //  $payment->setRedirectUrls($redirectUrls);
       //  $payment->setTransactions(array($transaction));


       //  try {
       //      $payment->create($apiContext);
       //  }catch (PPConnectionException $e) {
       //      dd($e);
       //  }
  
       //  $redirectUrl = $payment->getApprovalLink();

       // // return response()->json($redirectUrl);
       //  return redirect()->to($redirectUrl);
    }

    /**
     * 
     */
    public function getPaypalReturnResponse(Request $request)
    {
        $token = $request->get('token');
        $paymentId = $request->get('paymentId');
        $payerId = $request->get('PayerID');

        // $sdkConfig = array(
        //     "mode" => "sandbox"
        // );
        // $apiContext = new ApiContext(new OAuthTokenCredential(config("paypal_payments.Account.paypal_client_id"), config("paypal_payments.Account.paypal_client_secret")));

        // $apiContext->setConfig($sdkConfig);

        // $payment = new Payment();
        // $payment->setId($paymentId);
        
        // $paymentExec = new PaymentExecution;
        // $paymentExec->setPayerId($payerId);
        // $x = $payment->execute($paymentExec, $apiContext);
       // return redirect()->action('UserController@getDashboard');
    }

    /**
     * 
     */
    public function getPaypalCancelResponse(Request $request)
    {
        dd('cansel');
        //return redirect()->to("/#/subscriptions");
    }
}
