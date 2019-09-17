<!DOCTYPE html>
<?php include_once "../../util/helpers/config.php"; ?>
<html lang="de">
    <head>
        <title><?php echo $lang['title_management'] ?></title>
        <?php include "../../util/module/head.php"; ?><link rel="stylesheet" href="../../assets/css/management.css" />

    </head>
    <body>
        <div id="btn_show">
            <i class="fas fa-bars fa-2x"></i>
        </div>
        <?php if(isset($_SESSION['user_id'])): ?>
            <?php include '../../util/module/sidebar.php' ?>
            <?php include '../../util/module/management_module.php' ?>
        <?php else: ?>
            <!--TODO: Error-page-->
        <?php endif; ?>
    </body>
</html>