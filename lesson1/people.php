<?php
 class People{
    var $name;
    var $old;
    var $address;
    var $company;
    var $sex;
    
    function UpdateCompany($company){
        $this->company = $company;
    }

    function UpdateAddress($address){
        $this->address = $address;
    }  
 }

 $People1 = new People();
 $People1->name = 'Trần Tiến';
 $People1->old = 23;
 $People1->address = 'Quảng ninh';
 $People1->company = 'Công ty A';
 $People1->sex = 'Nam';

var_dump($People1);
echo '<br>';

 $People1->UpdateAddress('HCM');
 $People1->UpdateCompany('FPT');

 echo $People1->company;
echo '<br>';
echo $People1->address;
?>