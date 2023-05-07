<?php
/**
 * Created by PhpStorm.
 * User: hlh XueSi <1592328848@qq.com>
 * Date: 2023/5/7
 * Time: 6:26 下午
 */
declare(strict_types=1);

use EasyApi\Lang\Lang;

if (!function_exists('lang')) {
    /**
     * 获取语言变量值
     *
     * @param string $name 语言变量名
     * @param string $lang 语言
     * @param array  $vars 动态变量值
     *
     * @return mixed
     */
    function lang(string $name, string $lang = 'zh-cn', array $vars = [])
    {
        return Lang::getInstance()->get($name, $vars, $lang);
    }
}
