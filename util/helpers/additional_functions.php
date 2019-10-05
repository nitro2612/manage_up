<?php

class additional_functions
{
    public function timestamp_to_date($format, $timestamp)
    {
        switch ($format)
        {
            case 'de_date_long':
                $time = date('d.m.Y H:i', $timestamp);
                break;
            case 'int_std':
                $time = date('Y-m-d H:i', $timestamp);
                break;
            default:
                $time = date('Y-m-d H:i:s', $timestamp);
                break;
        }
        echo $time;
    }

    public function string_to_date_string($format, $string)
    {
        $timestamp = strtotime($string);

        switch ($format)
        {
            case 'de_date_long':
                $time = date('d.m.Y H:i', $timestamp);
                break;
            case 'int_std':
                $time = date('Y-m-d H:i', $timestamp);
                break;
            default:
                $time = date('Y-m-d H:i:s', $timestamp);
                break;
        }
        echo $time;
    }
}