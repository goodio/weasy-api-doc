<?php
/**
 * Weasy\Doc\Facades\Doc.php
 *
 * @Author: guhao
 * @Date  2018/8/31 0031
 *
 * @Version  1.0.0
 */

namespace Weasy\Doc\Facades;

/**
 * @method static  json()
 * @method static  md()
 *
 */

use Illuminate\Support\Facades\Facade;

class Doc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "doc";
    }
}