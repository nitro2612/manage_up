<?php
include "db.php";

if( isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_r']) &&  isset($_POST['street']) &&
    isset($_POST['city']) && isset($_POST['post_code']) && isset($_POST['area']) &&  isset($_POST['department']) &&  isset($_POST['job']) &&  isset($_POST['role'])) {

    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_r']) && !empty($_POST['street']) &&
        !empty($_POST['city']) && !empty($_POST['post_code']) && !empty($_POST['area']) && !empty($_POST['department']) && !empty($_POST['job']) && !empty($_POST['role']))
    {
        if ($_POST['password'] == $_POST['password_r'])
        {
            $password = password_hash($_POST['password_r'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO employee (first_name, last_name, email, password, street, domicile, post_code, area, department, job, role) 
                    VALUES ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] ."', '" . $_POST['email'] . "', '" . $password . "', '" . $_POST['street'] . "', '" . $_POST['city'] ."', '" . $_POST['post_code']
                    ."', '" . $_POST['area'] ."', '" . $_POST['department'] ."', '" . $_POST['job'] ."', '". $_POST['role'] ."');";
            $db = new db();
            $db->getConnection()->query($sql);

            header('Location: ../../app/view/management.php?search_select_op=first_name&man_search_value=' . $_POST['first_name']);
        }
        else
        {
            echo "Error: Two different passwords!";
        }
    }
    else
    {
        echo "Error: All field have to be filled!";
    }
}
else
{
    echo "Error: All fields are required!";
}