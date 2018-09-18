<?php

function isActiveRoute($route) {
    if (app('request')->is($route)) {
        return 'active';
    } else {
        return '';
    }
}