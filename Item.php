<?php

/**
 * Created by PhpStorm.
 * User: jameriah
 * Date: 1/21/16
 * Time: 1:51 PM
 */
class Item{

public $name = '';
public $description = '';
public $price = 0;


    public function __construct($name,$description,$price)
    {
        $this->name = $name;
        $this->desciption = $description;
        $this->price = $price;

    }
}