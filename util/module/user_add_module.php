<div id="add_user">
    <form action="../../util/helpers/add_user_h.php" method="post">
        <table id="table_user">
            <h1><?php echo $lang['user_add']['add_user']?></h1>
            <tbody>
                <tr>
                    <td><input type="text" name="first_name" placeholder="<?php echo $lang['emp_table']['first_name']?>"/></td>
                </tr>
                <tr>
                    <td><input type="text" name="last_name" placeholder="<?php echo $lang['emp_table']['last_name']?>" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="<?php echo $lang['emp_table']['email']?>" /></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="<?php echo $lang['emp_table']['password']?>" /></td>
                </tr>
                <tr>
                    <td><input type="password" name="password_r" placeholder="<?php echo $lang['emp_table']['password_r']?>" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="street" placeholder="<?php echo $lang['emp_table']['street']?>" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="city" placeholder="<?php echo $lang['emp_table']['domicile']?>" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="post_code" placeholder="<?php echo $lang['emp_table']['post_code']?>" /></td>
                </tr>
                <tr>
                    <td>
                        <select name="area" id="area_select">
                            <option disabled selected><?php echo $lang['user_add']['area']?></option>
                            <option value="exc">Executive</option>
                            <option value="dst_1">Distribution (M + S)</option>
                            <option value="dst_2">Distribution (F + L)</option>
                            <option value="ln">Local Networks</option>
                            <option value="mn">Mobile Networks</option>
                            <option value="fn">Fixed Networks</option>
                            <option value="svc">Services</option>
                            <option value="oth">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="department" id="department_select">
                            <option class="placeholder" disabled selected><?php echo $lang['user_add']['department']?></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="job" id="job_select">
                            <option class="placeholder" disabled selected><?php echo $lang['user_add']['job']?></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="role">
                            <option value="user" disabled selected><?php echo $lang['user_add']['role']?></option>
                            <option value="1"><?php echo $lang['user_add']['roles']['user']?></option>
                            <option value="2"><?php echo $lang['user_add']['roles']['area_manager']?></option>
                            <option value="3"><?php echo $lang['user_add']['roles']['technician']?></option>
                            <option value="4"><?php echo $lang['user_add']['roles']['admin']?></option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn_submit"><?php echo $lang['user_add']['add_user']?></button>
    </form>
</div>