<?php
declare (strict_types = 1);

namespace app\index\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class TestModel extends Model
{
    //指定模型对应的表
    protected $table = 'test';
}
