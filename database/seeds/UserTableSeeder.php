<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	public function run() {
		$password = Hash::make('admin');
		DB::table('users')->insert(
			[
				'fname'=>'admin',
				'lname'=>'admin',
				'address'=>'shop',
				'role'=>'1',
				'email'=>'admin@gmail.com',
				'password'=>$password,
				'status'=>1
			]);
	}
}