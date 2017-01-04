<?php
namespace app\admin\common;
use think\Controller;

class Adminbase extends Controller
{
/*
	protected $beforeActionList = [
		'first',
		'second' => ['except'=>'hello'],
		'three' => ['only'=>'hello,data'],
	];
*/
	//初始化
	public function _initialize()
	{
		echo 'init<br/>';
	}
/*
	protected function first()
	{
		echo 'first<br/>';
	}
	protected function second()
	{
		echo 'second<br/>';
	}
	protected function three()
	{
		echo 'three<br/>';
	}
	public function hello()
	{
		return 'hello';
	}
	public function data()
	{
		return 'data';
	}
*/
}