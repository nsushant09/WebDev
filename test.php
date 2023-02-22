<?php
class Student
{
    public $name;
    public $age;
    public $address;

    function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    function display()
    {
        echo ('The name is ' . $this->name .'<br>');
        echo ('The age is' . $this->age .'<br>');
        echo ('The address is ' . $this->address .'<br>');
    }

}

$student = new Student('Sushant', 10, 'Kalanki');
$student->display();

?>