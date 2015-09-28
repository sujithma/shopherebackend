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

class AdminController extends Controller {

	public function home() {
		return \View::make('home');
	}
	

	 public function logout() {      
       
       \Session::flush();
        return redirect('/');
    }

   
    public function delete() {
    	$input = \Input::all();  
    	if($input['type']=='sale')  {
			$sale = Sale::find($input['id']);
			$status = $sale->delete() ? 1 : 0;
		}
		else {
			$purchase = Purchase::find($input['id']);
			$status = $purchase->delete() ? 1 : 0;
		}

		
		return \Response::json($status);
    }

   public function getDetail() {
   	//$id = \Input::get('id');
   	$input = \Input::all();
   	if($input['type']=='sale')  {
	   	$detail = Sale::find($input['id']);
	}
	else{
		$detail = Purchase::find($input['id']);
	}
	   	return \Response::json($detail);
   }  

}
