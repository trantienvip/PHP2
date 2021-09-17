<?php
require('./models/BaseModel.php');
class User extends BaseModel{
    public $table = 'users';
    public function gender(){
        switch ($this->gender) {
            case 1:
                return 'Nam';
                break;
            case 2:
                return 'Nữ';
                break;
            default:
                return 'Khacs';
                break;
        }
    }
}

?>