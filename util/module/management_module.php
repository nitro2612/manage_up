<?php
include '../../util/helpers/db.php';

$db = new db();

if(isset($_GET['search_select_op']) && isset($_GET['man_search_value']))
{
    $type = $_GET['search_select_op'];
    $search = $_GET['man_search_value'];

    $sql = "SELECT * FROM employee WHERE " . $type . "='" . $search . "'";
    $sql_count = "SELECT COUNT(*) FROM employee WHERE " . $type . "='" . $search . "'";
    $length = mysqli_fetch_array($db->getConnection()->query($sql_count));

    $result = $db->getConnection()->query($sql);
}
?>
<div id="management">
    <div id="search_bar">
        <div id="wrapper_select">
            <form action="" method="get">
                <select name="search_select_op" id="search_select">
                    <option disabled selected>Suchekriterium auswählen</option>
                    <option value="id">Personalnummer</option>
                    <option value="first_name">Vorname</option>
                    <option value="last_name">Nachname</option>
                    <option value="email">E-Mail</option>
                    <option value="street">Straße</option>
                    <option value="domicile">Wohnort</option>
                    <option value="post_code">Postleitzahl</option>
                    <option value="area">Bereich</option>
                    <option value="department">Abteilung</option>
                    <option value="job">Beruf</option>
                    <option value="role">Rolle</option>
                    <option value="created_at">Erstellt am</option>
                    <option value="updated_at">Akutalisiert am</option>
                </select>
                <input type="text" id="search_input" name="man_search_value" placeholder="Suchen Sie nach" />
                <button type="submit" id="btn_search">Suchen</button>
            </form>
        </div>
    </div>

    <div id="box_results">
        <?php if($length[0] < 1): ?>
            <p>Ergebnis: <span id="text_bold">Keine Treffer</span></p>
        <?php else: ?>
            <p>Ergebnis: <span id="text_bold"><?php echo $length[0];?>&nbsp;Treffer</span></p>
        <?php endif; ?>
    </div>
    <div id="table_wrapper">
        <table id="table_results">
            <thead>
                <tr>
                    <th>Personalnummer</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Bereich</th>
                    <th>Abteilung</th>
                    <th>Beruf</th>
                    <th>zuletzt aktualisiert</th>
                    <th>Anzeigen</th>
                    <th>Bearbeiten</th>
                    <th>Löschen</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[8] ?></td>
                    <td><?php echo $row[9] ?></td>
                    <td><?php echo $row[10] ?></td>
                    <?php if($row[13] == null): ?>
                        <td><?php echo $row[13] ?></td>
                    <?php else: ?>
                        <td>Noch nicht akualisiert</td>
                    <?php endif; ?>
                    <td class="show"><i class="fas fa-eye"></i></td>
                    <td class="edit"><i class="fas fa-edit"></i></td>
                    <td class="delete"><i class="fas fa-trash-alt"></i></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>