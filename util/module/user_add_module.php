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
                            <option value="executive">Executive</option>
                            <option value="distribution_1">Distribution (M + S)</option>
                            <option value="distribution_2">Distribution (F + L)</option>
                            <option value="local_networks">Local Networks</option>
                            <option value="mobile_networks">Mobile Networks</option>
                            <option value="fixed_networks">Fixed Networks</option>
                            <option value="services">Services</option>
                            <option value="other">Other</option>
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
                            <option value="user"><?php echo $lang['user_add']['roles']['user']?></option>
                            <option value="dep_man"><?php echo $lang['user_add']['roles']['area_manager']?></option>
                            <option value="tech"><?php echo $lang['user_add']['roles']['technician']?></option>
                            <option value="admin"><?php echo $lang['user_add']['roles']['admin']?></option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn_submit"><?php echo $lang['user_add']['add_user']?></button>
    </form>
</div>