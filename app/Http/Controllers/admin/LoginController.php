<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

	/**
	 * 登陆界面
	 * @return [type] [description]
	 */
	public function index() {
		return view('admin.login.index');
	}

	/**
	 * 用户登录验证
	 */

	public function login(Request $request) {
		$data = $request->only('username', 'password');
		if (empty($remember)) {
			//remember表示是否记住密码
			$remember = 0;
		} else {
			$remember = $request->input('remember');
		}
		//如果要使用记住密码的话，需要在数据表里有remember_token字段
		if (Auth::guard('admin')->attempt($data, $remember)) {
			return redirect('admin/index/index');
		}
		return redirect()->back()->withInput($request->except('password'))->with('msg', '用户名或密码错误');
	}

}
