<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\View;
use app\admin\model\Adminuser;
use app\admin\model\Adminuser_password;
use think\Db;

class AdminuserController extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
	    //echo '<pre>';
	    //分页
	    $admin_user =  Adminuser::paginate(2);

	    $view = new View();

	    $view->assign('admin_user',$admin_user);

	    return $view->fetch('index');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch('create');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
	    $request = Request::instance()->post();

	    $salt =  Adminuser_password::ProduceSalt();

	    $admin_user = new Adminuser();
	    $admin_user->status = Adminuser::STATUS_ACTIVE;
	    $admin_user->name = $request['name'];
	    $admin_user->telephone = $request['telephone'];
	    $admin_user->email = $request['email'];
	    $admin_user->address = $request['address'];

	    $admin_user->salt = $salt;
	    $admin_user->password = md5(Adminuser_password::Default_password.$salt);
	    $user_result = $admin_user->save();

	    if(!empty($user_result)){
		    return $this->fetch('create');
	    }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

	/*
	 * 禁用/启用
	 * @param int $id
	 * @param int $operation
	 */
	public function disable($operation,$id)
	{
		$user = new Adminuser;
		//禁用
		if($operation ==Adminuser::STATUS_DISABLE){
			$rs = $user->where('id', $id)
				->update(['status' => Adminuser::STATUS_DISABLE]);
		}elseif($operation ==Adminuser::STATUS_ACTIVE){
		//启用
			$rs = $user->where('id', $id)
				->update(['status' => Adminuser::STATUS_ACTIVE]);
		}

		if(!empty($rs)){
			$this->success('修改成功','AdminuserController/index');
		}else{
			$this->error('修改失败','AdminuserController/index');
		}

	}

	/*
	 *重置密码
	 * @param int $id
	 *
	 */
	public function resetpassword($id)
	{
		$password = new Adminuser_password();
		//$pwd = $password->where('user_id', $id)->find();
		$salt = Adminuser_password::ProduceSalt();
		$rs = $password->where('user_id',$id)
			->update([
				'password'=> md5(Adminuser_password::Default_password.$salt),
				'salt'=>$salt
			]);
		if(!empty($rs)){
			$this->success('修改成功','AdminuserController/index');
		}else{
			$this->error('修改失败','AdminuserController/index');
		}
	}
}
