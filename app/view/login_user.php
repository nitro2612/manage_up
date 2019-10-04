<!DOCTYPE html>
<?php include_once "../../assets/lang/de.php"; ?>
<html lang="de">
    <head>
        <title><?php echo $lang['title']['title_login'] ?></title>
        <?php include "../../util/module/head.php"; ?>
        <link rel="stylesheet" href="../../assets/css/login.css" />
    </head>
    <body>
        <!--TODO: Only when user_id is not set-->
        <?php if(!isset($_SESSION['user_id'])): ?>
            <?php include '../../util/module/login_module.php' ?>
        <?php endif; ?>
            <!--TODO: Error-page-->
    </body>
</html>