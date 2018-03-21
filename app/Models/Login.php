<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Login extends Model {

	/**
	 * 关联到模型的数据库
	 */
	protected $table = 'category';
	/**
	 * 设定主键id
	 *
	 */
	protected $primaryKey = 'category_id';
	/**
	 * 表明模型是否应该被打上时间戳
	 *
	 * @var bool
	 */
	public $timestamps = false;

}
