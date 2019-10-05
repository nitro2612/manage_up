<?php

class user_translator
{
    public function translate_role($value)
    {
        switch ($value)
        {
            case 1:
                $result = 'Benutzer';
                break;
            case 2:
                $result = 'Abteilungsleiter';
                break;
            case 3:
                $result = 'Techniker';
                break;
            case 4:
                $result = 'Administrator';
                break;
            default:
                $result = 'FEHLER!';
                break;
        }
        echo $result;
    }

    public function translate_area($value)
    {
        switch ($value)
        {
            case 'exc':
                $result = 'Executive';
                break;
            case 'dst_1':
                $result = 'Distribution (M + S)';
                break;
            case 'dst_2':
                $result = 'Distribution (F + L)';
                break;
            case 'ln':
                $result = 'Local Networks';
                break;
            case 'mn':
                $result = 'Mobile Networks';
                break;
            case 'fn':
                $result = 'Fixed Networks';
                break;
            case 'svc':
                $result = 'Services';
                break;
            case 'oth':
                $result = 'Other';
                break;
            default:
                $result = 'FEHLER!';
                break;
        }
        echo $result;
    }
}