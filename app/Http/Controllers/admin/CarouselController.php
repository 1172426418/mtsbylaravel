<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$images = DB::table('image')
			->paginate(10);
		$assign = array(
			'title' => '轮播图管理',
			'images' => $images,
		);
		return view('admin/carousel/index', $assign);
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$images = DB::table('image')
			->where('id', $id)
			->first();
		$assign = array(
			'title' => '轮播图修改',
			'images' => $images,
		);
		return view('admin/carousel/edit', $assign);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$data = $request->except('_token');

		if (!$request->hasFile('image')) {
			DB::table('image')
				->where('id', $id)
				->update($data);
			return redirect('admin/carousel/index');
		} else {
			$file = $data['image'];
			$this->validate($request, [
				'logo_img' => 'image|between:0,5242880',

			], [
				'image' => ':attribute 必须为图片',
				'size' => ':attribute 文件大小必须小于5M',
			], [
				'image' => '图片',
			]);
			//判断文件是否上传成功
			if ($file->isValid()) {
				//原文件名
				$originalName = $file->getClientOriginalName();
				//扩展名
				$ext = $file->getClientOriginalExtension();
				//MimeType
				$type = $file->getClientMimeType();
				//临时绝对路径
				$realPath = $file->getRealPath();
				$filename = uniqid() . '.' . $ext;
				$bool = Storage::disk('public')->put($filename, file_get_contents($realPath));
				//判断是否上传成功
				if ($bool) {
					$data['image'] = Storage::disk('public')->url($filename);
					DB::table('image')
						->where('id', $id)
						->update($data);
					return redirect('admin/carousel/index');
				} else {
					return redirect()->back()->with('msg', '请稍后再试');
				}
			}
		}

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
}
