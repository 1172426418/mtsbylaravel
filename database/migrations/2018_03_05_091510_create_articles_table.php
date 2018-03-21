<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('articles', function (Blueprint $table) {
			$table->increments('id');
			$table->integer("category_id")->unsigned()->default(0)->comment("分类id");
			$table->string("title")->comment("标题");
			$table->text("content")->comment("内容");
			$table->timestamps(); //给表增加created_at 和 updated_at字段
			//在数据表插入和编辑数据的时候会自动更新这两个字段
			$table->softDeletes(); //给数据增加一个删除数据的时间
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('articles');
	}
}
