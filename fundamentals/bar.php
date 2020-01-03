<?php
/*
class Bar {
    public function sayHi() {
        echo 'Hi</br>';
    }
}
*/

/*
Notes: the keyword final, secures that sayHello, cannot be overitten by another class
*/
class Bar extends Foo {
    final public function sayHello() {
        echo 'Hello from Bar</br>';
    }
}
?>