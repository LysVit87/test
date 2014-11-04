<?php
class Animal {
    public $name;


    public function __construct($test) 
    {
        $this->name = $test;
    }
    
    public function getName()
    {
        return $this->name;
    }
}

class Cat extends Animal
{

    public function meow()
    {
        return 'Cat'." ".$this->name." ".'is saying meow';
    }
    
}

define('const_1', 'garfield');
define('const_2', 'garfield');
define('const_3', 'Cat garfield is saying meow');


$cat = new Cat(const_1);

if ($cat->getName() === const_2)echo "true";

echo "</br>";

if ($cat->meow() === const_3)echo "true";

 