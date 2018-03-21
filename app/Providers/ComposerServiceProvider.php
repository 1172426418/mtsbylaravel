<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
	/**
	 * 在容器中注册绑定
	 *
	 * @return void
	 */
	public function boot() {
		//基于闭包的composer
		view()->composer('layouts.home', function ($view) {
			$config = DB::table('config')
				->where('id', 1)
				->first();
			$banner = DB::table('image')
				->where('is_see', 1)
				->get();
			$view->with('config', $config)->with('banner', $banner);
		});
		view()->composer('home.index.*', function ($view) {
			$top_navigation = DB::table('category')
				->where('category_id', '<', 6)
				->get();
			$left_navigation = DB::table('category')
				->where('category_id', '>', 5)
				->get();
			$view->with('top_navigation', $top_navigation)->with('left_navigation', $left_navigation);
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
