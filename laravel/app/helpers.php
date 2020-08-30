<?php
// helpers ou class
function setActive ($routeName) {
    return request()->routeIs($routeName) ? 'active' : '';
}