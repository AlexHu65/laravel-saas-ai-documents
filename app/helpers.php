<?php

if (!function_exists('company')) {
    function company()
    {
        return app()->bound('company') ? app('company') : null;
    }
}

if (!function_exists('feature')) {
    function feature(string $code): bool
    {
        return company()?->hasFeature($code) ?? false;
    }
}
