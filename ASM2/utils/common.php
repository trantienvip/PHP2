<?php

const BASE_URL = "http://localhost:8080/php2/asm2/";
const PUBLIC_PATH = BASE_URL . "public/";
function dd($val=null){
    echo '<pre>';
    var_dump($val);
    die;
}
const GENDER_LIST = [
    1 => "Nam",
    2 => "Nữ",
    3 => "Khác"
];

const STATUS_TOPIC = [
    1 => "Active",
    2 => "Close"
];

?>