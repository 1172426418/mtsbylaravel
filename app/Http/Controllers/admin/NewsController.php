<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class NewsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		if ($request->input('category_id')) {
			$category_id = $request->input('category_id');
			if ($category_id == 'all') {
				$news = DB::table('news')
					->select('id', 'title', 'category_id', 'addtime')
					->orderBy("id", "desc")
					->paginate(10);
			} else {
				$news = DB::table('news')
					->select('id', 'title', 'category_id', 'addtime')
					->where('category_id', $category_id)
					->orderBy("id", "desc")
					->paginate(10);
			}
		} else {
			$news = DB::table('news')
				->select('id', 'title', 'category_id', 'addtime')
				->orderBy("id", "desc")
				->paginate(10);
			$category_id = 'all';
		}

		$category = DB::table('category')
			->get();
		$assign = array(
			'news' => $news,
			'category' => $category,
			'category_id' => $category_id,
		);
		return view('admin.news.index', $assign);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$category = DB::table('category')
			->get();
		$assign = array(
			'category' => $category,
			'title' => '资讯添加',
		);
		return view('admin.news.create', $assign);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$data = $request->except('_token');
		$this->validate($request, [
			'title' => 'required',
			'content' => 'required',

		], [
			'required' => ':attribute 为必填项',
			'min' => ':attribute 长度不符合要求',
			'integer' => ':attribute 必须为整数',
		], [
			'title' => '标题',
			'content' => '内容',
		]);
		$result = DB::table('news')
			->insert($data);
		if ($result) {
			return redirect()->back()->with('success', '操作成功');
		} else {
			return redirect()->back()->with('error', '操作失败')->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//页面加载
		$news = DB::table('news')
			->where('id', $id)
			->first();
		$category = DB::table('category')
			->get();
		$assign = array(
			'title' => '资讯修改',
			'news' => $news,
			'category' => $category,
		);
		return view('admin.news.edit', $assign);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
//更新操作
		$data = $request->except('_token');
		//dump($data);
		DB::table('news')
			->where('id', $id)
			->update($data);
		return redirect('admin/news/index');
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
	 * 新闻分类
	 */
	public function category() {
		$category = DB::table('category')
			->paginate(10);
		$assign = array(
			'category' => $category,
			'title' => '资讯分类',
		);
		return view('admin.news.category', $assign);
	}

	/**
	 * 分类详情
	 */
	public function category_edit($id) {

		$category = DB::table('category')
			->where('category_id', $id)
			->first();
		$assign = array(
			'category' => $category,
			'title' => '分类编辑',
		);
		return view('admin.news.category_edit', $assign);
	}
	/**
	 * 分类更新
	 */
	public function category_update(Request $request, $id) {
		$data = $request->except('_token');
		$this->validate($request, [
			'category_name' => 'required',

		], [
			'required' => ':attribute 为必填项',
		], [
			'category_name' => '分类标题',
		]);
		$result = DB::table('category')
			->where('category_id', $id)
			->update($data);
		if ($result) {
			return redirect('admin/news/category');
		} else {
			return redirect()->back()->with('msg', '未做任何修改')->withInput();
		}
	}
}
