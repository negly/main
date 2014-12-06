<?php
/* combine multiple files in one */
switch($_GET['type']) {
        case 'js':
            $folder = realpath('./js');
            break;
        case 'css':
            $folder = realpath('./css');
            break;
        default: 
            header ("HTTP/1.0 503 Not Implemented"); 
            exit; 
    };
    
    $fies = explode(',',  $GET['files']);
    