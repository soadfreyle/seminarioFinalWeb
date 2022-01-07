<?php

require_once $_SERVER['DOCUMENT_ROOT']."/computadoras/lib/config.php";

/**
 * Description of Computadore
 *
 * @author ODETH
 */
class Computer extends ActiveRecord\Model{
    
    public static $primary_key = "id";
}
