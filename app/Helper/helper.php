<?php

function set_active(array $route)
{
    if (is_array($route)) {
        foreach ($route as $r) {
            if (request()->routeIs($r)) {
                return 'active';
            }
        }
    }
}

function set_show(array $route)
{
    if (is_array($route)) {
        foreach ($route as $r) {
            if (request()->routeIs($r)) {
                return 'show';
            }
        }
    }
}
