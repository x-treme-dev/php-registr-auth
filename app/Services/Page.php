<?php

namespace App\Services;

class Page{
    // функция получает имя шаблона и выводит его 
    public static function part($part_name){
        require_once "views/components/" . $part_name . ".php";
    }
}