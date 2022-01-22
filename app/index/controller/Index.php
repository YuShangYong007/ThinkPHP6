<?php
declare (strict_types = 1);

namespace app\index\controller;

use app\BaseController;
use think\Request;
use app\index\model\TestModel;

class Index   extends BaseController
{

    /**
     * 首页
     */
    public function index()
    {
        $data=TestModel::select();
        return view('',compact('data'));
    }

    /**
     * 博客列表
     */
    public function blog()
    {
        $data=TestModel::select();
        return $this->result($data);
    }

}
