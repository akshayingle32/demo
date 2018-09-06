<?php
namespace myname; // see "Defining Namespaces" section

class MyClass {}
function myfunction() {}
const MYCONST = 1;

//$a = new MyClass;
//var_dump($a);
//$c = new \my\name\MyClass; // see "Global Space" section

//$a = strlen('hi'); // see "Using namespaces: fallback to global
                   // function/constant" section

//$d = namespace\MYCONST; // see "namespace operator and __NAMESPACE__
                        // constant" section
//$d = __NAMESPACE__ . '\MYCONST';
$d= "myname.MYCONST";
var_dump(__NAMESPACE__);
var_dump(__DIR__);
echo constant($d); // see "Namespaces and dynamic language features" section


?>