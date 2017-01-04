<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
	    return $this->fetch('index');
    }
	public function hellow()
	{
		$a = 1;

		$this->assign($a,$this->request->url(true));
		return $this->fetch('index');
	}
	public function one()
	{
		echo 'one<br>';
	}

	public function _empty($name)
	{
		return $this->showCity($name);
	}

	protected function showCity($name)
	{

		return '当前城市:' . $name;
	}
}
