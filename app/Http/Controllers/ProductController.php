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
    $data['products'] = Products::paginate(3);
    return \View::make('product', $data);
  }	
  public function showAddProduct() {    
  	return \View::make('add-Product');
  }

public function addProduct() {   
    $id = \Input::get('id'); 
    $rules = array(
        'name'=>'required',
        'quantity'=>'required|numeric',
        'image'=>'image|mimes:jpeg,jpg,png,gif'                    
    );
    $input = \Input::all();
    $valid = Validator::make($input,$rules);
    if ($valid->fails()) {            
        return \Redirect::back()->withErrors($valid);    
    }
    else { // If validation success
        $name = \Input::get('name');
        $quantity = \Input::get('quantity');
        $image = \Input::file('image');

        $product = $id ? Products::find($id) : new Products; // Creating product elobquent object

        // If image selected
        if($image)  {
            $filename = time()."-".$image->getClientOriginalName();
            $path = 'assets/images/'.$filename;      
            \Image::make($image->getRealPath())->resize(200, 200)->save($path);

            $existingImage = '/assets/images/'.$product->image;
            if(file_exists($existingImage)) {
                \File::delete($existingImage);
            }
            $product->image = $filename;
        }

        $product->name = $name;
        $product->quantity = $quantity;
        $product->save(); 

        return redirect(action('ProductController@product'));
    }
}

  public function editProduct($id) {    
    $data['product'] = Products::find($id);    
    return \View::make('editProduct', $data);
  }
	
  public function delete() {
    $id = \Input::get('id');      
    $product = Products::find($id);
    $status = $product->delete() ? 1 : 0;      
    return \Response::json($status);
    }
    

   
	



}
