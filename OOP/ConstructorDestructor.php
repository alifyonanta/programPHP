<?php
class Person {
    public function __construct() {
        echo "Object created";
    }
}
$p = new Person();

class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$p = new Person("David", 42);
echo $p->name;
echo '<br />';
echo $p->age;
?>
