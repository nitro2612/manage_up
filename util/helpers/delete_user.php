<?php
    include '../../util/helpers/db.php';
    if(isset($_POST['id']))
    {
        $sql = "DELETE FROM employee WHERE id=" . $_POST['id'] . ";";
        $db = new db();
        $db->getConnection()->query($sql);
        header('Location: ../../app/view/management.php');
    }
?>