<?php
include '../../util/helpers/db.php';

$db = new db();
$translator = new user_translator();

if(isset($_GET['search_select_op']) && isset($_GET['man_search_value']))
{
    $type = $_GET['search_select_op'];
    $search = $_GET['man_search_value'];

    if($type != 'all')
    {
        $sql = "SELECT * FROM employee WHERE " . $type . "='" . $search . "'";
        $sql_count = "SELECT COUNT(*) FROM employee WHERE " . $type . "='" . $search . "'";
    }
    else
    {
        $sql = "SELECT * FROM employee";
        $sql_count = "SELECT COUNT(*) FROM employee";
    }

    $length = mysqli_fetch_array($db->getConnection()->query($sql_count));
    $result = $db->getConnection()->query($sql);
}
?>
<div id="management">
    <div id="btn_user_add">
        <i class="fas fa-user-plus fa-2x"></i>
    </div>
    <div id="search_bar">
        <div id="wrapper_select">
            <form action="" method="get">
                <select name="search_select_op" id="search_select">
                    <option disabled selected><?php echo $lang['management']['search']['placeholder'];?></option>
                    <option value="id"><?php echo $lang['emp_table']['id'];?></option>
                    <option value="first_name"><?php echo $lang['emp_table']['first_name'];?></option>
                    <option value="last_name"><?php echo $lang['emp_table']['last_name'];?></option>
                    <option value="email"><?php echo $lang['emp_table']['email'];?></option>
                    <option value="street"><?php echo $lang['emp_table']['street'];?></option>
                    <option value="domicile"><?php echo $lang['emp_table']['domicile'];?></option>
                    <option value="post_code"><?php echo $lang['emp_table']['post_code'];?></option>
                    <option value="area"><?php echo $lang['emp_table']['area'];?></option>
                    <option value="department"><?php echo $lang['emp_table']['department'];?></option>
                    <option value="job"><?php echo $lang['emp_table']['job'];?></option>
                    <option value="role"><?php echo $lang['emp_table']['role'];?></option>
                    <option value="created_at"><?php echo $lang['emp_table']['created_at'];?></option>
                    <option value="updated_at"><?php echo $lang['emp_table']['updated_at'];?></option>
                    <option value="all"><?php echo $lang['management']['search']['all'];?></option>
                </select>
                <input type="text" id="search_input" name="man_search_value" placeholder="<?php echo $lang['management']['search']['search_value']; ?>" />
                <button type="submit" id="btn_search"><?php echo $lang['management']['search']['button']; ?></button>
                <select name="download_table" id="download_table">
                    <option value="placeholder"><?php echo $lang['management']['download']?></option>
                    <option value="csv" id="csv">.CSV</option>
                    <option value="xlsx" id="xlsx" disabled>.XLSX <?php echo "(" .  $lang['management']['in_development'] . ")"?></option>
                    <option value="pdf" id="pdf" disabled>.PDF <?php echo "(" .  $lang['management']['in_development'] . ")"?></option>
                </select>
            </form>
        </div>
    </div>

    <div id="box_results">
        <?php if(isset($_GET['search_select_op']) && isset($_GET['man_search_value'])): ?>
            <?php if($length[0] < 1): ?>
                <p><?php echo $lang['management']['result']; ?>: <span id="text_bold"><?php echo $lang['management']['no_matches']; ?></span></p>
            <?php else: ?>
                <?php if($length[0] == 1): ?>
                    <p><?php echo $lang['management']['result']; ?>: <span id="text_bold"><?php echo $length[0];?>&nbsp;<?php echo $lang['management']['matches_sgl']; ?></span></p>
                <?php else: ?>
                    <p><?php echo $lang['management']['result']; ?>: <span id="text_bold"><?php echo $length[0];?>&nbsp;<?php echo $lang['management']['matches_pl']; ?></span></p>
                <?php endif; ?>
            <?php endif; ?>
        <?php else: ?>
            <p><?php echo $lang['management']['result']; ?>: <span id="text_bold"><?php echo $lang['management']['no_matches']; ?></span></p>
        <?php endif; ?>
    </div>
    <div id="table_wrapper">
        <form action="user.php" method="get">
            <table id="table_results">
                <thead>
                    <tr>
                        <th id="id"><?php echo $lang['management']['table']['id']; ?></th>
                        <th id="first_name"><?php echo $lang['management']['table']['first_name']; ?></th>
                        <th id="last_name"><?php echo $lang['management']['table']['last_name']; ?></th>
                        <th id="area"><?php echo $lang['management']['table']['area']; ?></th>
                        <th id="department"><?php echo $lang['management']['table']['department']; ?></th>
                        <th id="job"><?php echo $lang['management']['table']['job']; ?></th>
                        <th id="updated_at"><?php echo $lang['management']['table']['updated_at']; ?></th>
                        <th id="role"><?php echo $lang['management']['table']['role']; ?></th>
                        <th><?php echo $lang['management']['table']['show']; ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($_GET['search_select_op']) && isset($_GET['man_search_value'])): ?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td class="id"><?php echo $row[0] ?></td>
                            <td class="first_name"><?php echo $row[1] ?></td>
                            <td class="last_name"><?php echo $row[2] ?></td>
                            <td class="area"><?php echo ($row[8] == 'n/a') ? $lang['management']['no_info'] : $translator->translate_area($row[8]); ?></td>
                            <td class="department"><?php echo $row[9] ?></td>
                            <td class="job"><?php echo $row[10] ?></td>
                            <td class="updated_at"><?php echo ($row[13] == 0) ? $lang['management']['not_updated'] : $handler->timestamp_to_date('de_date_long', $row[13]); ?></td>
                            <td class="role"><?php echo $translator->translate_role($row[11]); ?></td>
                            <td class="show">
                                <button class="btn_redirect" type="submit" name="id" value="<?php echo $row[0] ?>">
                                    <i class="fas fa-eye fa-2x"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>