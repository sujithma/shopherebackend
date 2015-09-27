<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\purchase;
use App\Models\Sale;
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
	public function product() {
		$data['products'] = Products::all();
		return \View::make('product', $data);
	}
	public function purchase() {
		$data['purchases'] = DB::table('products')                
                   			->join('purchase', 'purchase.product_id', '=', 'products.id')                   
                  			->get();
		return \View::make('purchase', $data);
	}
	public function sales() {		
		$data['allsales'] =  DB::table('products')                
                   			->join('sales', 'sales.product_id', '=', 'products.id')                   
                  			->get();
		$data['products'] = Products::lists('name','id');                  
		return \View::make('sales', $data);
	}
	public function banking() {
		return \View::make('banking');
	}
	public function profit() {
		return \View::make('profit');
	}

	 public function logout() {      
       
       \Session::flush();
        return redirect('/');
    }

    public function addProduct() {

    }
    public function deleteSale() {
    	$input = \Input::all();    	
		$sale = Sale::find($input['id']);
		$status = $sale->delete() ? 1 : 0;
		
		return \Response::json($status);
    }

   public function getSaleDetail() {
   	$id = \Input::get('id');
   	$sale = Sale::find($id);
   	return \Response::json($sale);
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
