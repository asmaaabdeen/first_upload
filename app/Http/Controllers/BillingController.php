<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing;
use App\Order;

class BillingController extends Controller
{
    function savePayment(Request $req){
    //   print_r ($req->input());
       $payment = new order();
       $order=$req->session()->get('order');
       $payment -> order = json_encode($order);
       $payment-> price =$req->session()->get('price');
       $payment -> location =$req -> input('address1');
       $payment -> payment = $req -> input('paymentMethod') ;
       $payment -> save();
       return redirect('/payment')->with('status','your order is finish successfully !');
     
    }
    public function paymentMethod(){
      $title = 'Payment';
      return view('Paymethod')->with('title', $title);
      
    }
     
}
