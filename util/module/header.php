<header>
    <?php include_once "../../util/helpers/config.php"; ?>
    <?php $_SESSION['user_id'] = 0; ?>
    <h1 id="page_headline">manageUp</h1>
    <?php if(isset($_SESSION['user_id'])): ?>
        <div id="user_section">
            <select id="user_select">
                <option disabled selected><?php echo $lang['header_select_action']['title'] ?></option>
                <option><?php echo $lang['header_select_action']['option1'] ?></option>
                <!--TODO: Check if admin-->
                    <option><?php echo $lang['header_select_action']['option2'] ?></option>
                <!--TODO end-->
                <option><?php echo $lang['header_select_action']['option3'] ?></option>
            </select>
            <select id="lang_select">
                <option disabled selected><?php echo $lang['header_lang_selector']['title'] ?></option>
                <option><?php echo $lang['header_lang_selector']['german'] ?></option>
                <option><?php echo $lang['header_lang_selector']['english'] ?></option>
                <option><?php echo $lang['header_lang_selector']['french'] ?></option>
            </select>
        </div>
    <?php else: ?>
            <div id="user_section">
                <button id="btn_login" class="btn_link_submit"><?php echo $lang['btn_login'] ?></button>
            </div>
    <?php endif; ?>
</header>