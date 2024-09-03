<?php

if (!function_exists('active')) {
    function active($routeName)
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}
