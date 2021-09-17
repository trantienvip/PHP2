<?php

require('./models/BaseModel.php');
class Product extends BaseModel{
    var $table = 'products';

    function formatPrice(){
        $price = number_format($this->price). ' VNĐ';
        return $price;
    }
}
?>
