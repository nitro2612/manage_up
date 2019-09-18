<div id="sidebar">
    <?php $_SESSION['user_id'] = 'fff'; ?>
    <div id="btn_close">
        <i class="far fa-times-circle fa-2x"></i>
    </div>
    <h1>manageUP</h1>
    <span class="seperator"></span>
    <div id="user">
        <div id="user_info">
            <p id="status"><?php echo $lang['sidebar']['status'] ?> <span id="status_color">Online</span></p>
            <p id="name"><?php echo $lang['sidebar']['name'] ?> Daniel Reinhold</p>
            <p id="role"><?php echo $lang['sidebar']['role'] ?> <span id="role_color">Admin</span></p>
            <p id="area"><?php echo $lang['sidebar']['area'] ?> Local Networks</p>
            <p id="department"><?php echo $lang['sidebar']['department'] ?> Software</p>
        </div>
        <span></span>
        <div id="actions">
            <?php if(isset($_SESSION['user_id'])): ?>
                <div id="btn_admin">
                    <button id="btn_statistics" class="btn btn_warning"><?php echo $lang['sidebar']['buttons']['statistics'] ?></button>
                    <button id="btn_management" class="btn btn_warning"><?php echo $lang['sidebar']['buttons']['management'] ?></button>
                </div>
            <?php endif ?>
            <div id="btn_user">
                <button id="btn_settings" class="btn btn_settings"><?php echo $lang['sidebar']['buttons']['settings'] ?></button>
                <button id="btn_logout" class="btn btn_error"><?php echo $lang['sidebar']['buttons']['logout'] ?></button>
            </div>
        </div>
        <div id="footer">
            <p id="software_version">manageUP 1.0</p>
            <h3 id="company">&copy; 2019, Flexware GmbH</h3>
        </div>
    </div>
</div>