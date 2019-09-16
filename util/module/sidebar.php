<div id="sidebar">
    <?php $_SESSION['userid'] = 1; ?>
    <h1>manageUP</h1>
    <span class="seperator"></span>
    <div id="user">
        <div id="user_info">
            <p id="status">Status: <span id="status_color">Online</span></p>
            <p id="name">Name: Daniel Reinhold</p>
            <p id="role">Rolle: <span id="role_color">Admin</span></p>
            <p id="area">Bereich: Local Networks</p>
            <p id="department">Abteilung: Software</p>
        </div>
        <span></span>
        <div id="actions">
            <?php if(isset($_SESSION['userid'])): ?>
                <div id="btn_admin">
                    <button id="btn_statistics" class="btn btn_warning">Statistiken</button>
                    <button id="btn_management" class="btn btn_warning">Verwaltung</button>
                </div>
            <?php endif ?>
            <div id="btn_user">
                <button id="btn_settings" class="btn btn_settings">Einstellungen</button>
                <button id="btn_logout" class="btn btn_error">Abmelden</button>
            </div>
        </div>
        <div id="footer">
            <p id="software_version">manageUP 1.0</p>
            <h3 id="company">&copy; 2019, Flexware GmbH</h3>
        </div>
    </div>
</div>