<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\purchase;
use App\Models\Sale;
use App\Models\Cash;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;

class BankingController extends Controller {

	public function banking() {
		return \View::make('banking');
	}
	


   public function addTransaction() {
   	$input = \Input::all();
   	$rules = array(
	            'bankName'=>'required',
	            'creditAmount'=>'required',
	            'currentBalance'=>'required',            
        	 );
   	$valid = Validator::make($input,$rules);
   	if ($valid->fails()) {    	       
    	return \Response::json(back()->withErrors($valid));
    }
   	$cash = new Cash;
   	$cash->bank_name = $input['bankName'];
   	$cash->amount_credited = $input['creditAmount'];
   	$cash->current_balance = $input['currentBalance'];
   	$cash->save();
   	return \Response::json($cash);
   }



}
