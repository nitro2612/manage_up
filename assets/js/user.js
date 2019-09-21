$(document).ready(function ()
{
    $('#selector #show').click(function ()
    {
        $(this).css('background-color', '#45495F');
        $('#selector #edit').css('background-color', 'transparent');
        $('#selector #delete').css('background-color', 'transparent');

        $('#boxes #show').css('display', 'block');
        $('#boxes #edit').css('display', 'none');
        $('#boxes #delete').css('display', 'none');
    });

    $('#selector #edit').click(function ()
    {
        $(this).css('background-color', '#45495F');
        $('#selector #show').css('background-color', 'transparent');
        $('#selector #delete').css('background-color', 'transparent');

        $('#boxes #edit').css('display', 'block');
        $('#boxes #show').css('display', 'none');
        $('#boxes #delete').css('display', 'none');
    });

    $('#selector #delete').click(function ()
    {
        $(this).css('background-color', '#45495F');
        $('#selector #show').css('background-color', 'transparent');
        $('#selector #edit').css('background-color', 'transparent');

        $('#boxes #delete').css('display', 'block');
        $('#boxes #edit').css('display', 'none');
        $('#boxes #show').css('display', 'none');
    });
});