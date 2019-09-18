$(document).ready(function ()
{
        $('#btn_close').click(function ()
        {
            $('#management').css('width', '100%');
            $('#navigation').css('width', '100%');
            $('#sidebar').css('margin-left', '-25%');
        });

        $('#btn_show').click(function ()
        {
            $('#management').css('width', '75%');
            $('#navigation').css('width', '75%');
            $('#sidebar').css('margin-left', '0');
        })
});