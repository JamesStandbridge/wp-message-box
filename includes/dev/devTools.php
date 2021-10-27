<?php

function dd($log = "ICI") 
{
    if(is_array($log) || is_object($log)) 
        error_log(print_r($log, true));
    else 
        error_log($log);
}