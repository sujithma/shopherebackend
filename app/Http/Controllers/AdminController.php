<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminController extends Controller {

	public function home() {
		return \View::make('home');
	}
	public function product() {
		return \View::make('product');
	}
	public function purchase() {
		return \View::make('purchase');
	}
	public function sales() {
		return \View::make('sales');
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
}