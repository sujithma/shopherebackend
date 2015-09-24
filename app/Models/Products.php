<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Products extends Model {
	protected $table = 'products';

	public function __construct() {

	}
	public function purchase() {
        return $this->hasMany('Purchase', 'product_id');
    }
    public function sales() {
        return $this->hasMany('Sales', 'product_id');
    }
}