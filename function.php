<?php
function isValidClassNam($string){
    $regexp = '/^[CAP][0-9]{4,4}[GHIKLM]$/';
    if (preg_match($regexp,$string)){
        echo "Valid class name";
    }else{
        echo "Invalid class name";
    }
}