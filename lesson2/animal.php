<?php

    class Animal{
        var $name = 'animal';
        
        static function demo(){
            $model = new static();
            $model->name;
            return $model;
        }
    }

    echo Animal::demo()->name;
    
    
?>