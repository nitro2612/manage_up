$(document).ready(function ()
{
    $('#table_results .show').click(function () {
        window.location.href = '../../app/view/user_show.php';
    });

    $('#table_results .edit').click(function () {
        alert('Edit');
    });

    $('#table_results .delete').click(function () {
        alert('Delete');
    });
});