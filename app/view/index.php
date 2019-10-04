<?php session_start();?>
<?php if(isset($_SESSION['user_id'])): ?>
    <!DOCTYPE html>
    <?php include_once "../../assets/lang/de.php"; ?>
<html lang="de">
    <head>
        <title><?php echo $lang['title']['title_home'] ?></title>
        <?php include "../../util/module/head.php"; ?>
        <link rel="stylesheet" href="../../assets/css/navigation.css" />
    </head>
    <body>
        <div id="btn_show">
            <i class="fas fa-bars fa-2x"></i>
        </div>
        <?php include '../../util/module/sidebar.php' ?>
        <?php include '../../util/module/navigation.php' ?>
<?php else: ?>
    <?php header('Location: login_user.php'); ?>
<?php endif;?>
    </body>
</html>