<?php
    session_start();
    if($_GET['lang_select'] == 'de')
        $_SESSION['lang'] = 'de';
    else if($_GET['lang_select'] == 'en')
        $_SESSION['lang'] = 'en';
    else if($_GET['lang_select'] == 'fr')
        $_SESSION['lang'] = 'fr';

header('Location: ../../app/view/index.php');
?>