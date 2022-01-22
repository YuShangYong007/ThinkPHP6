<?php
declare (strict_types = 1);

namespace app\index\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;

class Hello extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('hello')
            ->setDescription('自定义 hello command');
    }

    protected function execute(Input $input, Output $output)
    {
        // 指令输出
        $output->writeln('hello');
        $str=\app\index\model\TestModel::select();
        foreach ($str as $s){
             $output->writeln(json_encode($s));
        }
       
    }
}
