<?php

if (!function_exists('route_class')) {
    /**
     * 将当前请的路由名称转换为 CSS 类名称，方便对某个页面做样式定制。
     *
     * @return mixed
     */
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}
