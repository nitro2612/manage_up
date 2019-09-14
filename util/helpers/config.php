<?php
session_start();
    if(!isset($_SESSION['lang']) || empty($_SESSION['lang']))
    {
        $_SESSION['lang'] = 'de';
    }
    else if(isset($_GET['lang']) && !empty($_GET['lang']))
    {
        if($_GET['lang'] == 'de')
            $_SESSION['lang'] = 'de';
        else if($_GET['lang'] == 'en')
            $_SESSION['lang'] = 'en';
        else if($_GET['lang'] == 'fr')
            $_SESSION['lang'] = 'fr';
    }

require_once '../../assets/lang/' . $_SESSION['lang'] . '.php';

?>