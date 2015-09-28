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

class ProductController extends Controller {

	
	
	public function purchase() {
		$data['purchases'] = DB::table('products')                
                   			->join('purchase', 'purchase.product_id', '=', 'products.id')                   
                  			->get();
        $data['products'] = Products::lists('name','id'); 
		return \View::make('purchase', $data);
	}
	
	

    

   
	



}
