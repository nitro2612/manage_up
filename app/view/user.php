<?php session_start(); ?>
<?php if(isset($_SESSION['user_id'])): ?>
    <!DOCTYPE html>
    <?php include_once "../../assets/lang/en.php"; ?>
    <html lang="de">
        <head>
            <title><?php echo $lang['title']['title_user_management'] ?></title>
            <?php include "../../util/module/head.php"; ?>
            <link rel="stylesheet" href="../../assets/css/management_user.css" />
            <script type="text/javascript" src="../../assets/js/user.js"></script>
        </head>
    <body>
    <div id="btn_show">
        <i class="fas fa-bars fa-2x"></i>
    </div>
    <?php include '../../util/module/sidebar.php' ?>
    <?php include '../../util/module/user_module.php' ?>
<?php else: ?>
    <?php header('Location: login_user.php') ?>
<?php endif; ?>
</body>
</html>