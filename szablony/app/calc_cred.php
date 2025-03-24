<?php
require_once dirname(__FILE__).'/../config.php';

function getParams(&$amount, &$length, &$lending_rate){
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : null;
    $lending_rate = isset($_REQUEST['lending_rate']) ? $_REQUEST['lending_rate'] : null;
}

function validate(&$amount, &$length, &$lending_rate, &$messages, &$hide_intro, &$infos){
    if (! (isset($amount) && isset($length)) && isset($lending_rate)){
        return false;
    }

    $hide_intro = true;
    $infos [] = 'Przekazano parametry.';

    if($amount == ""){
    $messages [] = "Nie podałeś wartości pola ,,Kwota\"";
    }
    if($length == ""){
        $messages [] = "Nie podałeś wartości pola ,,Ile lat\"!";
    } 

    if(count($messages) > 0) return false;

    if(!is_numeric($amount)){
        $messages [] = "Podana kwota nie jest wartością liczbową!";
    }
    if(!is_numeric($length)){
        $messages [] = "Podana ilość lat nie jest wartościa liczbową!";
    }

    if(count($messages) > 0) return false;
    else return true;

}


function process(&$amount, &$length, &$lending_rate, &$messages, &$result, &$infos){
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    $amount = intval($amount);
    $length = intval($length);
    $lending_rate = floatval($lending_rate);

    $result = round(($amount + ($amount * $lending_rate * $length)) / ($length * 12), 2); 
}

$amount = null;
$length = null;
$lending_rate = null;
$result = null;
$infos = array();
$messages = array();
$hide_intro = false;


getParams($amount, $length, $lending_rate);
if(validate($amount, $length, $lending_rate, $messages, $hide_intro, $infos)){
    process($amount, $length, $lending_rate, $messages, $result, $infos);
}

$page_title = "Kalkulator kredytowy";
$page_description = "Oblicz ile wynosi twoja rata kredytowa";


include 'calc_cred_view.php';