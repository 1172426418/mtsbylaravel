<?php

namespace App\Http\Controllers;

use DB;

class DatabaseController extends Controller {
	public function insert() {
		DB::table("articles")->insert([
			[
				'title' => '文章4',
				'content' => '内容4',

			],
			[
				'title' => '文章5',
				'content' => '内容5',

			],

		]);
	}

	public function get() {
		$data = DB::table("articles")
			->select("category_id", 'title', 'content')
			->where('title', '<>', '文章1')
			->whereIn('id', [1, 2, 3])
			->groupBy('category_id')
			->orderBy('id', 'desc')
			->limit(1)
			->get();
		dump($data);
	}
}
