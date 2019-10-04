<?php session_start(); ?>
<?php if(isset($_SESSION['user_id'])): ?>
    <?php if($_SESSION['role'] == 'admin'): ?>
        <!DOCTYPE html>
        <?php include_once "../../assets/lang/de.php"; ?>
        <html lang="de">
        <head>
            <title><?php echo $lang['title']['title_management'] ?></title>
            <?php include "../../util/module/head.php"; ?><link rel="stylesheet" href="../../assets/css/management.css" />
            <script type="text/javascript" src="../../assets/js/management.js"></script>
        </head>
        <body>
            <div id="btn_show">
                <i class="fas fa-bars fa-2x"></i>
            </div>
            <?php include '../../util/module/sidebar.php' ?>
            <?php include '../../util/module/management_module.php' ?>
        </body>
        </html>
    <?php else: ?>
        <?php header('Location: index.php') ?>
    <?php endif; ?>
<?php else: ?>
    <?php header('Location: login_user.php') ?>
<?php endif; ?>