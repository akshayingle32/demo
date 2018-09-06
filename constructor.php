<?php
class Animal
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
        echo "opk";
        $this->$name = $name;


       
    }

   public function __destruct()
    {
        echo "I'm dead now :";
    }//end destructor
}//end class 
//$name2 = "Kadam";
$animal = new Animal("nitin");
echo  $animal->$name;
?>