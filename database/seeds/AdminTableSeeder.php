<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('admin')->insert([
			[
				'username' => 'admin',
				'password' => '$2y$10$AOdWYuc.cvQEyQng9YOK2uVJnfmEGuh.arMRfE72I08mXZemoyt0.',
			],

		]);
	}
}
