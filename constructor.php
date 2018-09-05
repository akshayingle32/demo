<?php
class Animal
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
        $this->$name = $name;
       
    }

   public function __destruct()
    {
        echo "I'm dead now :";
    }
}

$animal = new Animal("ppppppppp");
echo  $animal->$name;
?>