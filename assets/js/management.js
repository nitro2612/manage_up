$(document).ready(function ()
{
    $('#download_table option').click(function ()
    {
        if($(this).attr('id') == 'csv')
        {
            //TODO: Download CSV-File
        }
        else if($(this).attr('id') == 'xlsx')
        {
            //TODO: Download XLSX-File
        }
        else
        {
            //TODO: Download PDF-File
        }
    })
});