<?php
// Autoloading files
//include 'bar.php';
//include 'foo.php';

/* Notes: If a file imported has more classes than we really will need, PHP has a 
function called spl_autoload_register, that will autoload all classes for us
EX:
spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});
*/

spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();
//$bar->sayHi();
$bar->sayHello();

/*
Notes: iterate an Object properties, from within a method in a class
or outside the class
*/
// Iterate from an internal function
print "<h2>Iterate from Inside function</h2>";
$people = new People;
$people->iterateObject();

// Iterate from outside. We no longer will have access to private and protected 
// atributes
print "<h2>Iterate from Outside</h2>";
foreach($people as $key=>$value) {
    print "$key=>$value</br>";
}
