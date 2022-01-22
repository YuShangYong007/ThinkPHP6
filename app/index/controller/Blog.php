<?php
declare (strict_types = 1);

namespace app\index\controller;

use app\BaseController;
use think\Request;

class Blog extends BaseController
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        return view();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
        $arr=[
            "name1"=>[
                "name1"=>"zhangsan",
                "name1"=>"lisi1",
                "name1"=>"lisi2",
                "name1"=>"lisi3"
            ],
            "name2"=>[
                "name2"=>"zhangsan",
                "name2"=>"lisi1",
                "name2"=>"lisi2",
                "name2"=>"lisi3"
            ],
            "name3"=>[
                "name3"=>"zhangsan",
                "name3"=>"lisi1",
                "name3"=>"lisi2",
                "name3"=>"lisi3"
            ],
        ];

        return  json($arr);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
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
}
