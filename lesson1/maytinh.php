<?php
// Định nghĩa ra class
 class MayTinh {
     var $name;// định nghĩa thuộc tính;
     var $price;// định nghĩa thuộc tính;
     function __construct(){
         echo $this->connect = ' đã kết nối đến db';
     }
     function sell(){ // tạo mới 1 hành động
         echo $this->name . ' Đã được bán';
     }
     
     function getName(){ // tạo mới 1 hành động
        return $this->name;
    }
 }

 $assus = new MayTinh();// tạo ra một object lớp máy tính
 $assus->name = 'Máy tính Asus M002'; // gán giá trị cho thuộc tính name
 $assus->price = 13000000; // gán giá trị cho thuộc tính price

 $hp = new MayTinh();
 $hp->name = 'Máy tính HP 222';
 $hp->price = 2600000;

 var_dump($assus);
 echo '<br>';
 var_dump($hp);

//  echo $assus->name;
//  echo $assus->sell();
echo $assus->name;
?>