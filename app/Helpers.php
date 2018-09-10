<?php

function isActiveRoute($route) {
    if (app('request')->is($route)) {
        return 'nav-link active';
    } else {
        return 'nav-link';
    }
}