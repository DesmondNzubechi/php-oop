<?php

/*
class Fruit {
    public $name;
    public $color;
    public $gender;

    function __construct($name, $color, $gender) {
        $this->name = $name;
        $this->color = $color;
        $this->gender = $gender;
    }

    /*
    function get_name() { return $this->name;}
    function get_color() { return $this->color;}
    function get_gender() { return $this->gender;}
    */
    /*
function __destruct() {
    echo "{$this->name}";
}

};

$fruity = new Fruit('bannaana', 'red', 'male');
*/
//$fruity->set_name('banana');
//$col = new Fruit();
//$col->set_color('Red');
//$gen = new Fruit();

//$gen->set_gender('male');
//echo 'I am ' . $fruity->get_gender() . ' ' . 'human being';
//echo '<br>';
//echo 'The color is :' . $fruity->get_color();
//echo '<br>';
//echo 'the name of the fruit is ' . $fruity->get_name();

/*

class Animal {
    public $typep;
    public $specie;


function __construct($typep, $specie) {

    $this->typep = $typep;
    $this->specie = $specie;
}

function intro() {
    echo " {$this->typep} ";
}

}

class AnimalT Extends  Animal {
    function message(){
       echo 'straw there';
    }
}


$check = new AnimalT('goat', 'gwggfgfe');
$check->message();
$check->intro();


//constant variable
class checkC {
const leave_comment = ' Who are we?';
public function bye(){
    echo self::leave_comment;
}


}

$checky = new checkC();
$checky->bye();
*/

/*
abstract class NewCl {
    abstract Protected function pMan($name);
}

class NewCl1 extends NewCl{
    public function pMan($name){
        if ($name =='Nzube') {
            # code...
            $prefix = 'Mr.';
        } elseif($name === 'Nzubechi') {
            # code...
            $prefix = 'Mrs.';
        } else {
            $prefix = '';
        };

        return "{$prefix}  {$name}";
        
    }
}

$obj = new NewCl1;
echo $obj->pMan('Nzube');
echo $obj->pMan('Nzubechi');
*/



///INTERFACE


interface animals{
    function makeSound();
}

class goat implements animals{
    public function makeSound(){
        echo 'Mooooo';
    }
}

class dog implements animals{
    public function makeSound(){
        echo 'Bark';
    }
}

class cow implements animals{
    public function makeSound(){
        echo 'Hold it';
    }
}

$cow = new cow();
$goat = new goat();
$dog = new dog();
$animalArray = array($cow, $goat, $dog);

foreach($animalArray as $animal){
    $animal->makeSound();
}




//Traits

Trait bookie{
    public function bookie1(){
        echo 'OOP is fun';
    }
}

class book {
    use bookie;
}

$books = new book();
$books->bookie1();


trait men {
    public function man(){
        echo 'senior man';
    }
}
trait women {
    public function woman(){
        echo 'senior woman';
    }
}

class human {
    use men, women;
}

$sw = new human();
$sw->man();
$sw->woman();


//statics

trait sman {
    static public $senior = 'shbshbhds';
   static public function sm() {
        echo 'I am good man';
    }
}


class  ama {
    use sman;
}

ama::sm();
echo ama::$senior;
