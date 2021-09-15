<?php

require('./BaseModel.php');
class Product extends BaseModel{
    var $table = 'products';

    // function covertRenderer(){
    //     switch($this->gender){
    //         case 1: 
    //             return 'Nam';
    //         case 2: 
    //             return 'Nữ';
    //         default: 
    //             return 'Khác';
    //     }
    // }
}
