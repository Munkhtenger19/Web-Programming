<?php

function letezik($string){
    return isset($_GET[$string]) && strlen(trim($_GET[$string])) != 0;
}

function jsonBeolvas($filenev){
    return json_decode(file_get_contents($filenev));
}

function jsonKiir($filenev, $adat){
    file_put_contents($filenev, json_encode($adat, JSON_PRETTY_PRINT));
}

function atiranyit($oldal){
    header('Location: ' .$oldal.'.php');
    die;
}