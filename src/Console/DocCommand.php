<?php
/**
 * Weasy\Doc\Console\GenDoc.php
 *
 * @Author: guhao
 * @Date  2018/9/17 0017
 *
 * @Version  1.0.0
 */

namespace Weasy\Doc\Console;


use Illuminate\Console\Command;
use Weasy\Doc\Facades\Doc;

class DocCommand extends Command
{

    protected $name = 'doc:generate';

    protected $description = '生成api文档';

    public function __construct(){
        parent::__construct();
    }

    public function handle(){
        Doc::json();
        $this->line("文档生成成功，文件位置：storage目录中的doc文件夹");
    }

}