<?php
/**
 * Project: multilangphp.
 * File: clear_cache.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 9:51 AM - 8/19/13
 * Website: www.xiao.vn
 */
session_start();
session_destroy();
setcookie('lang',false);
header("Location: index.php");