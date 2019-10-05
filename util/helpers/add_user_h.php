<?php
include "db.php";

$fields = ['first_name', 'last_name', 'email', 'password', 'password_r', 'street', 'city', 'post_code', 'area', 'department', 'job', 'role'];
$check = false;

foreach ($fields as $key => $value)
{
    if(isset($_POST[$value]) && !empty($_POST[$value]))
        $check = true;
}

if($check == true)
{
    if ($_POST['password'] == $_POST['password_r'])
    {
        $db = new db();
        $db->getConnection()->query
        (
            "INSERT INTO employee (first_name, last_name, email, password, street, domicile, post_code, area, department, job, role) 
            VALUES ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] ."', '" . $_POST['email'] . "', '" . password_hash($_POST['password_r'], PASSWORD_DEFAULT)
            . "', '" . $_POST['street'] . "', '" . $_POST['city'] ."', '" . $_POST['post_code'] ."', '" . $_POST['area'] ."', '" . $_POST['department'] ."', '" . $_POST['job']
            ."', '". $_POST['role'] ."');"
        );

        header('Location: ../../app/view/management.php?search_select_op=first_name&man_search_value=' . $_POST['first_name']);
    }
    else
        echo "Error: Two different passwords!";
}