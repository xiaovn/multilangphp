
<?php
/**
 * Project: multilangphp.
 * File: newpage.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:13 AM - 8/19/13
 * Website: www.xiao.vn
 */
require_once "language.php";
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title><?php echo $lang['NEW_PAGE_TITLE']?></title>
</head>
<body>
    <p>
        <h3><?php echo $lang['NEW_PAGE_TITLE']?></h3>
        <div style="text-align: left">
            <?php echo $lang['NEW_PAGE_CONTENT']?>
            <br>
            <?php echo $lang['SELECT_LANGUAGE'];?>: <a href='?lang=en'><?php echo $lang['EN'];?></a> - <a href='?lang=vi'><?php echo $lang['VI'];?></a>
        </div>
    </p>
    <a href='index.php'><?php echo $lang['BACK_TO_HOME'];?></a>
</body>
</html>