<div id="sidebar">
    <div id="btn_home">
        <i class="fas fa-home fa-2x"></i>
    </div>
    <div id="btn_close">
        <i class="far fa-times-circle fa-2x"></i>
    </div>
    <h1>manageUP</h1>
    <div id="user">
        <div id="user_info">
            <p id="status"><?php echo $lang['sidebar']['status']?>&nbsp;<span id="status_color">ERROR</span></p>
            <p id="name"><?php echo $lang['sidebar']['name']?>&nbsp;<?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];?></p>
            <p id="role"><?php echo $lang['sidebar']['role']?>&nbsp;<span id="role_color"><?php echo $_SESSION['role'];?></span></p>
            <p id="area"><?php echo $lang['sidebar']['area']?>&nbsp;<?php echo $_SESSION['area'];?></p>
            <p id="department"><?php echo $lang['sidebar']['department']?>&nbsp;<?php echo $_SESSION['department'];?></p>
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
            <h3 id="company">&copy; 2019, Daniel Reinhold</h3>
        </div>
    </div>
</div>