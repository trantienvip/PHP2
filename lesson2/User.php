<?php

require('./BaseModel.php');
class User extends BaseModel{
    var $table = 'users';

    function covertRenderer(){
        switch($this->gender){
            case 1: 
                return 'Nam';
            case 2: 
                return 'Nữ';
            default: 
                return 'Khác';
        }
    }
}
