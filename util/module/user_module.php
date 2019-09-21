<?php
    include "../../util/helpers/db.php";
    if(isset($_GET['id']))
    {
        $selected_id = $_GET['id'];
        $db = new db();

        $sql = "SELECT * FROM employee WHERE id='" . $selected_id . "'";
        $result = $db->getConnection()->query($sql);
        $row = mysqli_fetch_array($result);
    }
?>
<div id="wrapper">
    <div id="user_box">
        <div id="selector">
            <ul>
                <li id="show">Show</li><li
                    id="edit">Edit</li><li
                    id="delete">Delete</li>
            </ul>
        </div>
        <div id="boxes">
            <div id="show">
                <h1><?php echo $row[1] . ' ' . $row[2];?></h1>
                <table id="table_user">
                    <tbody>
                        <tr>
                            <td class="title">Employee number</td>
                            <td><?php echo $row[0];?></td>
                        </tr>
                        <tr>
                            <td class="title">First name</td>
                            <td><?php echo $row[1];?></td>
                        </tr>
                        <tr>
                            <td class="title">Last name</td>
                            <td><?php echo $row[2];?></td>
                        </tr>
                        <tr>
                            <td class="title">Email</td>
                            <td><?php echo $row[3];?></td>
                        </tr>
                        <tr>
                            <td class="title">Street</td>
                            <td><?php echo $row[5];?></td>
                        </tr>
                        <tr>
                            <td class="title">Domicile</td>
                            <td><?php echo $row[7] . ' ' . $row[6];?></td>
                        </tr>
                        <tr>
                            <td class="title">Area</td>
                            <td><?php echo $row[8];?></td>
                        </tr>
                        <tr>
                            <td class="title">Department</td>
                            <td><?php echo $row[9];?></td>
                        </tr>
                        <tr>
                            <td class="title">Job</td>
                            <td><?php echo $row[10];?></td>
                        </tr>
                        <tr>
                            <td class="title">Role</td>
                            <td><?php echo $row[11];?></td>
                        </tr>
                        <tr>
                            <td class="title">Created at</td>
                            <td><?php echo $row[12];?></td>
                        </tr>
                        <tr>
                            <td class="title">Updated at</td>
                            <td><?php echo $row[13] != null ? $row[13] : 'Not updated yet';?></td>
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
                            <td class="title">Employee number</td>
                            <td><input type="text" name="employee_number" value="<?php echo $row[0];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">First name</td>
                            <td><input type="text" name="first_name" value="<?php echo $row[1];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Last name</td>
                            <td><input type="text" name="last_name" value="<?php echo $row[2];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Email</td>
                            <td><input type="text" name="email" value="<?php echo $row[3];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Password</td>
                            <td><input type="text" name="password" value="<?php echo $row[4];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Street</td>
                            <td><input type="text" name="street" value="<?php echo $row[5];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">City</td>
                            <td><input type="text" name="city" value="<?php echo $row[6];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Post Code</td>
                            <td><input type="text" name="post_code" value="<?php echo $row[7];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Area</td>
                            <td><input type="text" name="area" value="<?php echo $row[8];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Department</td>
                            <td><input type="text" name="department" value="<?php echo $row[9];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Job</td>
                            <td><input type="text" name="job" value="<?php echo $row[10];?>" /></td>
                        </tr>
                        <tr>
                            <td class="title">Role</td>
                            <td><input type="text" name="role" value="<?php echo $row[11];?>" /></td>
                        </tr>
                        </tbody>
                    </table>
                    <br />
                    <button type="submit" class="btn_submit" id="btn_save">Save</button>
                </form>
            </div>
            <div id="delete">
                <h1><?php echo $row[1] . ' ' . $row[2];?></h1>
                <p>Are you sure that you want to delete this employee?</p>
                <button class="btn_error" id="btn_delete">Delete</button>
            </div>
        </div>
    </div>
</div>