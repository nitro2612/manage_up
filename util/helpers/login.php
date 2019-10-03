<?php
include '../../util/helpers/db.php';
if(isset($_POST['pers_num']) && isset($_POST['pwd']))
{
    $db = new db();
    $user = $_POST['pers_num'];

    $password = $_POST['pwd'];

    $sql = "SELECT * FROM employee WHERE id='" . $user . "';";
    $result = $db->getConnection()->query($sql);
    $row = mysqli_fetch_array($result);

    if($row != null)
    {
        if(password_verify($_POST['pwd'], $row[4]))
        {
            if($result == true)
            {
                session_start();
                $_SESSION['user_id'] = $row[0];
                $_SESSION['first_name'] = $row[1];
                $_SESSION['last_name'] = $row[2];
                $_SESSION['email'] = $row[3];
                $_SESSION['password'] = $row[4];
                $_SESSION['street'] = $row[5];
                $_SESSION['domicile'] = $row[6];
                $_SESSION['post_code'] = $row[7];
                $_SESSION['area'] = $row[8];
                $_SESSION['department'] = $row[9];
                $_SESSION['job'] = $row[10];
                $_SESSION['role'] = $row[11];
                $_SESSION['created_at'] = $row[12];
                $_SESSION['updated_at'] = $row[13];
                header('Location: ../../app/view/index.php');
            }
            else
            {
                echo "Error result false";
            }
        }
        else
        {
            echo "Error: Password incorrect!";
        }
    }
    else
    {
        echo "Error: No such number available!";
    }

}
else
{
    echo "Error";
    # TODO: Fehlermeldung (Nicht alle Eingabefelder ausgefüllt)
}