<?php
include '../../util/helpers/db.php';

$fields = ['employee_number', 'first_name', 'last_name', 'email', 'street', 'city', 'post_code', 'area', 'department', 'job', 'role'];
$check = false;

foreach ($fields as $key => $value)
{
    if(isset($_POST[$value]) && !empty($_POST[$value]))
        $check = true;
}

if($check == true)
{
    $now = new DateTime();
    $current = $now->getTimestamp();

    $sql = "UPDATE employee SET first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', email='" . $_POST['email']
        . "', street='" . $_POST['street'] . "', domicile='" . $_POST['city'] . "', post_code='" . $_POST['post_code']
        . "', area='" . $_POST['area'] . "', department='" . $_POST['department'] . "', job='" . $_POST['job'] . "', role='" . $_POST['role'] . "', updated_at=" . $current
        . " WHERE id='" . $_POST['employee_number'] . "';";

    echo $sql;
    $db = new db();
    $db->getConnection()->query($sql);
    header('Location: ../../app/view/user.php?id=' . $_POST['employee_number']);
}