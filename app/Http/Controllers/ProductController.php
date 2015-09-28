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
	
	public function product() {
    // var_dump(\Request::is('produ*'));
    // exit;
	//$data['products'] = DB::table('Products')->paginate(1);
    $data['products'] = Products::paginate(1);
    return \View::make('product', $data);
  }	
  public function addProduct() {
    
  	return \View::make('addProduct');
  }
	

    

   
	



}
