$(document).ready(function ()
{
    $('#btn_management').click(function ()
    {
        window.location.href = 'management.php';
    });

    $('#btn_logout').click(function ()
    {
        window.location.href = '../../util/helpers/logout.php';
    });

    $('#btn_home').click(function ()
    {
       window.location.href = 'index.php';
    });

    $('#btn_user_add').click(function ()
    {
        window.location.href = 'add_user.php';
    });

});