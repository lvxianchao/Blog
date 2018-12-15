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

if (!function_exists('get_admin_route_name')) {
    /**
     * 获取当前后台路由的主要名称
     *
     * @return mixed
     */
    function get_admin_route_name()
    {
        return explode('.', Route::currentRouteName())[1];
    }
}

if (!function_exists('if_route_name')) {
    /**
     * 判断传入的路由主要名称参数是否和当前路由主要名称一致
     *
     * @param $route_name
     *
     * @return bool
     */
    function if_route_name($route_name)
    {
        return get_admin_route_name() === $route_name;
    }
}
