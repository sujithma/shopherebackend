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

class salesController extends Controller {

	public function sales() {		
		$data['allsales'] =  DB::table('products')                
                   			->join('sales', 'sales.product_id', '=', 'products.id')                   
                  			->get();
		$data['products'] = Products::lists('name','id');                  
		return \View::make('sales', $data);
	}
	
		

   public function editSale() {
   	$input = \Input::all();
   	$sale = Sale::find($input['id']);

   	$sale->product_id = $input['productId'];
   	$sale->date = $input['date'];
   	$sale->quantity = $input['quantity'];
   	$sale->total_price = $input['totalPrice'];
   	$sale->unit_price = $input['unit_price'];
   	$sale->save();
   	return \Response::json($sale);

   }

	

}
