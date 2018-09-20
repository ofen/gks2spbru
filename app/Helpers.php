<?php

function isActive($route) {
    if (app('request')->is($route)) {
        return 'active';
    } else {
        return '';
    }
}