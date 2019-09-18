<?php
include '../../util/helpers/db.php';

$db = new db();

if(isset($_GET['search_select_op']) && isset($_GET['man_search_value']))
{
    if(isset($_GET['search_select_op']) && isset($_GET['man_search_value']))
    {
        $type = $_GET['search_select_op'];
        $search = $_GET['man_search_value'];

        $sql = "SELECT * FROM employee WHERE " . $type . "='" . $search . "'";
        $sql_count = "SELECT COUNT(*) FROM employee WHERE " . $type . "='" . $search . "'";
        $length = mysqli_fetch_array($db->getConnection()->query($sql_count));

        $result = $db->getConnection()->query($sql);
    }
}
?>
<div id="management">
    <div id="search_bar">
        <div id="wrapper_select">
            <form action="" method="get">
                <select name="search_select_op" id="search_select">
                    <option disabled selected><?php echo $lang['management']['search']['placeholder'];?></option>
                    <option value="id"><?php echo $lang['management']['search']['id'];?></option>
                    <option value="first_name"><?php echo $lang['management']['search']['first_name'];?></option>
                    <option value="last_name"><?php echo $lang['management']['search']['last_name'];?></option>
                    <option value="email"><?php echo $lang['management']['search']['email'];?></option>
                    <option value="street"><?php echo $lang['management']['search']['street'];?></option>
                    <option value="domicile"><?php echo $lang['management']['search']['domicile'];?></option>
                    <option value="post_code"><?php echo $lang['management']['search']['post_code'];?></option>
                    <option value="area"><?php echo $lang['management']['search']['area'];?></option>
                    <option value="department"><?php echo $lang['management']['search']['department'];?></option>
                    <option value="job"><?php echo $lang['management']['search']['job'];?></option>
                    <option value="role"><?php echo $lang['management']['search']['role'];?></option>
                    <option value="created_at"><?php echo $lang['management']['search']['created_at'];?></option>
                    <option value="updated_at"><?php echo $lang['management']['search']['updated_at'];?></option>
                </select>
                <input type="text" id="search_input" name="man_search_value" placeholder="<?php echo $lang['management']['search']['search_value']; ?>" />
                <button type="submit" id="btn_search"><?php echo $lang['management']['search']['button']; ?></button>
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
                    <th><?php echo $lang['management']['table']['show']; ?></th>
                    <th><?php echo $lang['management']['table']['edit']; ?></th>
                    <th><?php echo $lang['management']['table']['delete']; ?></th>
                </tr>
            </thead>
            <tbody>
            <?php if(isset($_GET['search_select_op']) && isset($_GET['man_search_value'])): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td class="id"><?php echo $row[0] ?></td>
                        <td class="first_name"><?php echo $row[1] ?></td>
                        <td class="last_name"><?php echo $row[2] ?></td>
                        <td class="area"><?php echo ($row[8] == 'n/a') ? $lang['management']['no_info'] : $row[8]; ?></td>
                        <td class="department"><?php echo $row[9] ?></td>
                        <td class="job"><?php echo $row[10] ?></td>
                        <td class="updated_at"><?php echo ($row[13] == null) ? $lang['management']['not_updated'] : $row[13]; ?></td>
                        <td class="show"><i class="fas fa-eye"></i></td>
                        <td class="edit"><i class="fas fa-edit"></i></td>
                        <td class="delete"><i class="fas fa-trash-alt"></i></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>