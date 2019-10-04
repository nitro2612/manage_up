<?php
    include "../../util/helpers/db.php";
    if(isset($_GET['id']))
    {
        $selected_id = $_GET['id'];
        $db = new db();

        $sql = "SELECT * FROM employee WHERE id='" . $selected_id . "'";
        $result = $db->getConnection()->query($sql);
        $row = mysqli_fetch_array($result);

        $count = mysqli_fetch_array($db->getConnection()->query("SELECT COUNT(*) FROM employee WHERE role='admin'"));
    }
?>
<div id="wrapper">
    <div id="user_box">
        <div id="selector">
            <ul>
                <li id="show"><?php echo $lang['user']['show'] ?></li><li
                    id="edit"><?php echo $lang['user']['edit'] ?></li><li
                    id="delete"><?php echo $lang['user']['delete'] ?></li>
            </ul>
        </div>
        <div id="boxes">
            <div id="show">
                <h1><?php echo $row[1] . ' ' . $row[2];?></h1>
                <table id="table_user">
                    <tbody>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['id']?></td>
                            <td><?php echo $row[0];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['first_name']?></td>
                            <td><?php echo $row[1];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['last_name']?></td>
                            <td><?php echo $row[2];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['email']?></td>
                            <td><?php echo $row[3];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['street']?></td>
                            <td><?php echo $row[5];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['domicile']?></td>
                            <td><?php echo $row[7] . ' ' . $row[6];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['area']?></td>
                            <td><?php echo $row[8];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['department']?></td>
                            <td><?php echo $row[9];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['job']?></td>
                            <td><?php echo $row[10];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['role']?></td>
                            <td><?php echo $row[11];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['created_at']?> at</td>
                            <td><?php echo $row[12];?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['updated_at']?></td>
                            <td><?php echo $row[13] != 0 ? date('Y-m-d H:i', $row[13]) : $lang['user']['not_updated'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="edit">
                <form action="../../util/helpers/update_user.php" method="post">
                    <table id="table_user">
                        <h1><?php echo $row[1] . ' ' . $row[2];?></h1>
                        <tbody>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['id']?></td>
                            <td><input type="text" name="employee_number" value="<?php echo $row[0];?>"/></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['first_name']?></td>
                            <td><input type="text" name="first_name" value="<?php echo $row[1];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['last_name']?></td>
                            <td><input type="text" name="last_name" value="<?php echo $row[2];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['email']?></td>
                            <td><input type="text" name="email" value="<?php echo $row[3];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['password']?></td>
                            <td><input type="text" name="password" value="<?php echo $row[4];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['street']?></td>
                            <td><input type="text" name="street" value="<?php echo $row[5];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['domicile']?></td>
                            <td><input type="text" name="city" value="<?php echo $row[6];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['post_code']?></td>
                            <td><input type="text" name="post_code" value="<?php echo $row[7];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['area']?></td>
                            <td><input type="text" name="area" value="<?php echo $row[8];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['department']?></td>
                            <td><input type="text" name="department" value="<?php echo $row[9];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['job']?></td>
                            <td><input type="text" name="job" value="<?php echo $row[10];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['role']?></td>
                            <td><input type="text" name="role" value="<?php echo $row[11];?>" /></td>
                        </tr>
                        </tbody>
                    </table>
                    <br />
                    <button type="submit" class="btn_submit" id="btn_save"><?php echo $lang['user']['btn_save']?></button>
                </form>
            </div>
            <div id="delete">
                <h1><?php echo $row[1] . ' ' . $row[2];?></h1>
                <p><?php echo $lang['user']['delete_question']?></p>
                    <?php if($count[0] > 1): ?>
                        <form action="../../util/helpers/delete_user.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row[0]?>" />
                            <button class="btn_error" id="btn_delete"><?php echo $lang['user']['delete']?></button>
                        </form>
                    <?php else: ?>
                        <button class="btn_error" id="btn_delete_d"><?php echo $lang['user']['delete']?></button>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>