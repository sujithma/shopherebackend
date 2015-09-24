<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {
	protected $table = 'purchase';

	public function __construct() {

	}

	public function product() {
		return $this->belongsTo('Products', 'product_id	');
	}
}