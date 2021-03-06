<?php

// +----------------------------------------------------------------------
// | ThinkLibrary 6.0 for ThinkPhP 6.0
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/ThinkLibrary
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/ThinkLibrary
// | github 仓库地址 ：https://github.com/GC0202/ThinkLibrary
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/think-library
// +----------------------------------------------------------------------

namespace DtApp\ThinkLibrary\facade;

use DtApp\ThinkLibrary\helper\Files as helper;
use think\Facade;

/**
 * 文件门面
 * Class Files
 * @see \DtApp\ThinkLibrary\helper\Files
 * @package DtApp\ThinkLibrary\facade
 * @package think\facade
 * @mixin helper
 *
 * @method helper delete(string $name) bool 删除文件
 * @method helper deletes(string $name) bool 删除文件夹
 * @method helper folderZip(string $name, string $suffix_name = '.png', string $file_name = '*') bool 把文件夹里面的文件打包成zip文件
 * @method helper getFiles(string $path) array|string 获取目录下的所有文件和目录
 * @method helper rmFiles(string $path) bool 删除目录下的文件
 */
class Files extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return helper::class;
    }
}
