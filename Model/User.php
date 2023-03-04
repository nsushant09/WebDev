<?php
namespace Model;

class User{
    public $id;
    public $name;
    public $address;
    public $phone;
    
    function __construct($id, $name, $address, $phone){
        $this->name = $name;
        $this->id = $id;
        $this->address = $address;
        $this->phone = $phone;
    }

    function display(){
        $string = "The id is : " .$this->id ."\n" ."The name is : ".$this->name ."\n";
        return $string;
    }
}
?>