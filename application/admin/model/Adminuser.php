<?php
namespace app\admin\model;

//use think\Model;
use think\model\Merge;

class Adminuser extends Merge
{
	const STATUS_DELETED = 0;  // 删除
	const STATUS_ACTIVE = 10; // 启用
	const STATUS_DISABLE = 20; // 禁用
	const STATUS_UNAUTHORIZED = 30; // 未认证
	const STATUS_AUTHORIZING = 31; // 认证中
	const STATUS_FAILED = 32; // 认证失败
	const STATUS_BLACKLIST = 90; // 黑名单

	// 设置当前模型对应的完整数据表名称
	protected $table = 'slowly_adminuser';

	// 定义关联模型列表
	protected $relationModel = [
		// 给关联模型设置数据表
		'Profile'   =>  'slowly_adminuser_password',
	];
	// 定义关联外键
	protected $fk = 'user_id';
	protected $mapFields = [
		// 为混淆字段定义映射
		'id'        =>  'Adminuser.id',
	];
}
?>