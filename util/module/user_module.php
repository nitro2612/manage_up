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
                            <td><?php echo $translator->translate_role($row[11]); ?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['created_at']?> at</td>
                            <td><?php $handler->string_to_date_string('de_date_long', $row[12]);?></td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['updated_at']?></td>
                            <td><?php echo $row[13] != 0 ? $handler->timestamp_to_date('de_date_long', $row[13]) : $lang['user']['not_updated'];?></td>
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
                            <td>
                                <!--Row 8-->
                                <select name="area" id="area">
                                    <option value="exc" <?php if($row[8] == 'exc') echo 'selected' ?> >Executive</option>
                                    <option value="dst_1" <?php if($row[8] == 'dst_1') echo 'selected' ?> >Distribution (M + S)</option>
                                    <option value="dst_2" <?php if($row[8] == 'dst_2') echo 'selected' ?> >Distribution (F + L)</option>
                                    <option value="ln" <?php if($row[8] == 'ln') echo 'selected' ?> >Local Networks</option>
                                    <option value="mn" <?php if($row[8] == 'mn') echo 'selected' ?> >Mobile Networks</option>
                                    <option value="fn" <?php if($row[8] == 'fn') echo 'selected' ?> >Fixed Networks</option>
                                    <option value="svc" <?php if($row[8] == 'svc') echo 'selected' ?> >Services</option>
                                    <option value="oth" <?php if($row[8] == 'oth') echo 'selected' ?> >Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['department']?></td>
                            <td>
                                <!--Row 9-->
                                <select name="department" id="department"></select>
                            </td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['job']?></td>
                            <td>
                                <!--Row 10-->
                                <select name="job" id="job"></select>
                            </td>
                        </tr>
                        <tr>
                            <td class="title"><?php echo $lang['emp_table']['role']?></td>
                            <td>
                                <select name="role">
                                    <option value="1" <?php if($row[11] == 1) echo 'selected'; ?>><?php echo $lang['user_add']['roles']['user'];?></option>
                                    <option value="2" <?php if($row[11] == 2) echo 'selected'; ?>><?php echo $lang['user_add']['roles']['area_manager'];?></option>
                                    <option value="3" <?php if($row[11] == 3) echo 'selected'; ?>><?php echo $lang['user_add']['roles']['technician'];?></option>
                                    <option value="4" <?php if($row[11] == 4) echo 'selected'; ?>><?php echo $lang['user_add']['roles']['admin'];?></option>
                                </select>
                            </td>
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