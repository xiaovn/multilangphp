<?php
/**
 * Project: multilangphp.
 * File: languages.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 9:41 AM - 8/19/13
 * Website: www.xiao.vn
 */
session_start();
require_once "config.php";
if(isset($_GET['lang']))
{
    $lang = $_GET['lang'];
    // register the session and set the cookie
    $_SESSION['lang'] = $lang;
    setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isset($_SESSION['lang']))
{
    $lang = $_SESSION['lang'];
}
else if(isset($_COOKIE['lang']))
{
    $lang = $_COOKIE['lang'];
}
else if(DEFAULT_LANG)
{
    $lang = DEFAULT_LANG;
    //Get default language setting
}
else
{
    $lang = 'en';
}
switch ($lang)
{
    //Setting up language file
    case 'en':
        $lang_file = 'en.php';
        break;
    case 'vi':
        $lang_file = 'vi.php';
        break;
    default:
        $lang_file = 'en.php';

}
include_once 'languages/'.$lang_file;