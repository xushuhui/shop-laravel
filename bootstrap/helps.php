<?php

use Illuminate\Routing\Router;

function route_class()
{
    return str_replace('.', '-', Router::currentRouteName());
}