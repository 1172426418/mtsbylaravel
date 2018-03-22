<?php

namespace App\Providers;

use Cache;
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
			$config = Cache::remember('config', 10060, function () {
				return DB::table('config')->where('id', 1)->first();
			});
			$banner = Cache::remember('banner', 10060, function () {
				return DB::table('image')->where('is_see', 1)->get();
			});
			$view->with('config', $config)->with('banner', $banner);
		});
		view()->composer('home.index.*', function ($view) {
			$top_navigation = Cache::remember('top_navigation', 10060, function () {
				return DB::table('category')->where('category_id', '<', 6)->get();
			});
			$left_navigation = Cache::remember('left_navigation', 10060, function () {
				return DB::table('category')->where('category_id', '>', 5)->get();
			});
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
