<!DOCTYPE html>
<?php include_once "../../util/helpers/config.php"; ?>
<html lang="de">
    <head>
        <title><?php echo $lang['title_home'] ?></title>
        <?php include "../../util/module/head.php"; ?>
        <link rel="stylesheet" href="../../assets/css/navigation.css" />
    </head>
    <body>
        <?php if(isset($_SESSION['user_id'])): ?>
            <?php include '../../util/module/sidebar.php' ?>
            <?php include '../../util/module/navigation.php' ?>
        <?php else: ?>
            <!--TODO: Error-page-->
        <?php endif; ?>
    </body>
</html>