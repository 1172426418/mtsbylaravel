<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('admin', function (Blueprint $table) {
			$table->increments('id');
			$table->string('username')->comment("用户名");
			$table->string('password')->comment("密码");
			$table->string('phone')->comment("手机号");
			$table->string('email')->comment('邮箱');
			$table->string('address')->comment('地址');
			$table->integer('date')->comment('登陆时间');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('admin');
	}
}
