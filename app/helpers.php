<?php

if (!function_exists('company')) {
    function company()
    {
        return app()->bound('company') ? app('company') : null;
    }
}
