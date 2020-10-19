<?php
class Person {
    protected $age;
    function speak() {
        echo "Hi!";
    }
    public function  setAge($age){
        
        $this->age=$age;
    }
    public function getAge (){
        return $this->age;
    }
}

$p1 = new Person(); 
$p1->setAge(23);
echo $p1->getAge ().'<br>'; 
$p1->speak();


class Person {
    public $age;
    function speak() {
        echo "Hi!";
    }
}
$p1 = new Person(); 
$p1->age = 23;
echo $p1->age; 
$p1->speak();

class Dog {
    public $legs=4;
    public function display() {
        echo $this->legs;
    }
}
$d1 = new Dog();
$d1->display();

echo '<br />';

$d2 = new Dog();
$d2->legs = 2;
$d2->display();
?>
?>
