$(document).ready(function ()
{
        $('#sidebar #btn_close').click(function ()
        {
                $('#sidebar').addClass('sidebar_hidden');
                $('#management').css('width', '100%');
        });

        $('#btn_show').click(function ()
        {
            $('#management').css('width', '75%');
            $('#sidebar').removeClass('sidebar_hidden');
        })
});