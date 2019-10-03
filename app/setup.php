<?php

include "../util/helpers/db.php";

$db = new db();
$count = mysqli_fetch_array($db->getConnection()->query("SELECT COUNT(*) FROM employee WHERE role='admin'"));

if($count[0] < 1)
{
    $pwd = password_hash('admin', PASSWORD_DEFAULT);
    $db->getConnection()->query("TRUNCATE employee");
    $sql = "INSERT INTO employee (first_name, last_name, email, password, street, domicile, post_code, area, department, job, role) 
            VALUES ('admin', 'admin', 'admin@manage-up.com', '" . $pwd . "', '-', '-', '-', '-', '-', '-', 'admin')";

    $db->getConnection()->query($sql);
    header('Location: view/login_user.php');
}
else
{
    header('Location: view/login_user.php');
}