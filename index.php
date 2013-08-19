<?php
/**
 * Project: multilangphp.
 * File: index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 9:40 AM - 8/19/13
 * Website: www.xiao.vn
 */
require_once "language.php";
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Multilang PHP Website</title>
</head>
<body>
<div style="text-align: center">
<h1><?php echo $lang['HEADER_TITLE']." ".$lang['LANGUAGE_TITLE'];?></h1>
<?php echo $lang['SELECT_LANGUAGE'];?>: <a href='?lang=en'><?php echo $lang['EN'];?></a> - <a href='?lang=vi'><?php echo $lang['VI'];?></a>
<br><a href='clear_cache.php'><?php echo $lang['CLEAR_CACHE'];?></a> - <a href='newpage.php'><?php echo $lang['VIEW_NEW_PAGE'];?></a>
</div>
</body>
</html>