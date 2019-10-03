<div id="add_user">
    <form action="../../util/helpers/add_user_h.php" method="post">
        <table id="table_user">
            <h1>Add user</h1>
            <tbody>
                <tr>
                    <td><input type="text" name="first_name" placeholder="First name" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="last_name" placeholder="Last name" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="E-Mail" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="password" placeholder="Password" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="password_r" placeholder="Repeat password" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="street" placeholder="Street" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="city" placeholder="City" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="post_code" placeholder="Post code" /></td>
                </tr>
                <tr>
                    <td>
                        <select name="area" id="area_select">
                            <option disabled selected>Area</option>
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
                            <option id="placeholder" disabled selected>Department</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="job" id="job_select">
                            <option id="placeholder" disabled selected>Job</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="role">
                            <option value="user" disabled selected>Role</option>
                            <option value="user">User</option>
                            <option value="user">Area manager</option>
                            <option value="user">Technician</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn_submit">Add user</button>
    </form>
</div>