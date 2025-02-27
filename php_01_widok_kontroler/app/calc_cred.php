<?php
require_once dirname(__FILE__).'/../config.php';

$amount = $_REQUEST['amount'];
$length = $_REQUEST['length'];
$lending_rate = $_REQUEST['lending_rate'];

if(! (isset($amount) && isset($length))){
    $messages [] = "Sprawdź czy podałeś wszystkie parametry!";
}

if($amount == ""){
    $messages [] = "Nie podałeś wartości pola ,,Kwota\"";
}
if($length == ""){
    $messages [] = "Nie podałeś wartości pola ,,Ile lat\"!";
} 

if(empty($messages)){
    if(!is_numeric($amount)){
        $messages [] = "Podana kwota nie jest wartością liczbową!";
    }
    if(!is_numeric($length)){
        $messages [] = "Podana ilość lat nie jest wartościa liczbową!";
    }
}

if(empty($messages)){
    $amount = intval($amount);
    $length = intval($length);
    $lending_rate = floatval($lending_rate);

    $result = round(($amount + ($amount * $lending_rate * $length)) / ($length * 12), 2);
}

include 'calc_cred_view.php';