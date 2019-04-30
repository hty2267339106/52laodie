<?php
namespace app\index\controller;
use \think\Controller;//
use \think\Request;

class Index extends Controller
{
    public function index()
    {
		$request = Request::instance();
		echo "当前模块名称是" . $request->module().'</br>';
		echo "当前控制器名称是" . $request->controller().'</br>';
		echo "当前操作名称是" . $request->action();
		return $this->fetch();
    }


    public function login_page(){
		// $request = Request::instance();
		// echo "当前模块名称是" . $request->module().'</br>';
		// echo "当前控制器名称是" . $request->controller().'</br>';
		// echo "当前操作名称是" . $request->action();
		return $this->fetch('login-page');
    }


}

