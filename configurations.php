<?php

if (!defined('enigma')) {
    header('HTTP/1.0 403 Forbidden');
    die('403 Forbidden');
}

$version = "1.0.0";     // Your release version (Change this on every release)

define("dev", True);    // Change this to False in a production release

$cache_expire_time = 60*60*24*30;   // 30 Days