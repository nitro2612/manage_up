<?php
include '../../util/helpers/db.php';
if(isset($_POST['employee_number']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])
         && isset($_POST['password']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['post_code'])
    && isset($_POST['area']) && isset($_POST['department']) && isset($_POST['job']) && isset($_POST['role']))
{
    if(!empty($_POST['employee_number']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])
        && !empty($_POST['password']) && !empty($_POST['street']) && !empty($_POST['city']) && !empty($_POST['post_code'])
        && !empty($_POST['area']) && !empty($_POST['department']) && !empty($_POST['job']) && !empty($_POST['role']))
    {
        $sql = "UPDATE employee SET first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', email='" . $_POST['email']
            . "', password='" . $_POST['password'] . "', street='" . $_POST['street'] . "', domicile='" . $_POST['city'] . "', post_code='" . $_POST['post_code']
            . "', area='" . $_POST['area'] . "', department='" . $_POST['department'] . "', job='" . $_POST['job'] . "', role='" . $_POST['role']
            . "' WHERE id='" . $_POST['employee_number'] . "';";

        echo $sql;
        $db = new db();
        $db->getConnection()->query($sql);
        header('Location: ../../app/view/user.php?id=' . $_POST['employee_number']);
    }
}
else
{
    echo "error";
}