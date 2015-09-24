<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model {
	protected $table = 'sales';

	public function __construct() {

	}

	public function product() {
		return $this->belongsTo('Products', 'product_id	');
	}
}