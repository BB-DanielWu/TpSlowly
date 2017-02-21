<?php
namespace app\admin\model;

use think\Model;
class Adminuser_password extends Model
{
	const Default_password = 888888;//默认密码

	// 设置当前模型对应的完整数据表名称
	protected $table = 'slowly_adminuser_password';

	//生成随机的salt
	public static function ProduceSalt(){
		$token = '';
		$codeAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$codeAlphabet .= 'abcdefghijklmnopqrstuvwxyz';
		$codeAlphabet .= '0123456789';
		for ($i = 0; $i < 8; $i++) {
			$token .= $codeAlphabet[mt_rand(0, strlen($codeAlphabet) - 1)];
		}

		return $token;
	}

}
?>