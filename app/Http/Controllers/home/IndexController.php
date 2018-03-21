<?php

namespace App\Http\Controllers\home;

use App\Models\Index;
use App\Models\Partner;
use Illuminate\Http\Request;

class IndexController extends BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$result = Index::paginate(10);

		$assign = array(
			'result' => $result,
			'category_id' => 0,
		);
		return view('home.index.index', $assign);
	}

	/**
	 * 其他分类
	 */
	public function category($id) {
		$category_id = $id;
		$result['result'] = Index::where('category_id', $category_id)->paginate(10);
		$result['category_id'] = $id;
		return view('home.index.index', $result);
	}

	/**
	 * 合作伙伴
	 */
	public function partner($name) {
		$partner = $name;
		$result['result'] = Partner::where('title', 'like', '%' . $partner . '%')->first();
		$result['category_id'] = 0;
		return view('home.index.show', $result);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$result['result'] = Index::where('id', $id)->first();
		$result['category_id'] = $result['result']['category_id'];

		return view('home.index.show', $result);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		return '传递的id参数为:' . $id;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id, $name) {
		$music = $request->input("music");
		$book = request()->input("book");
		$str = <<<php
id:$id<br>
name:$name<br>
music:$music<br>
book:$book<br>
php;
		dump($request->all());
		return $str;

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
	/**
	 * 关键字搜索
	 */
	public function search(Request $request) {
		$keywords = $request->get('keywords');
		$result = Index::where('title', 'like', '%' . $keywords . '%')->paginate(10);
		$assign = array(
			'result' => $result,
			'category_id' => 0,
		);
		return view('home.index.index', $assign);
	}
}
