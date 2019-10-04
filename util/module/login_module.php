<div id="login_wrapper">
    <h1>manageUP</h1>
    <div id="temp">
        <form action="../../util/helpers/login.php" method="post">
            <input type="text" name="pers_num" id="login_user" placeholder="<?php echo $lang['login']['ph_employee_number'] ?>" />
            <br>
            <input type="password" name="pwd" id="login_pwd" placeholder="<?php echo $lang['login']['ph_password'] ?>" />
            <br>
            <p id="forgot_pwd"><?php echo $lang['login']['forgot_password']?><a href="mailto:support@manageup.com?subject=Passwort vergessen"><?php echo $lang['login']['help'] ?></a></p>
            <button type="submit"><?php echo $lang['login']['login'] ?></button>
        </form>
    </div>
</div>