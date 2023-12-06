<?php

class Mycources{


    public $name;
    public $location;
    public $time;
    public $duration;
    public $needs;


    public function first($name,$location,$time,$duration,$needs){
        $this->name=$name;
        $this->location=$location;
        $this->time=$time;
        $this->duration=$duration;
        $this->needs=$needs;

    }


    public function answers(){
        echo "My course name is ".$this->name."<br>";
        echo "My course is held in ".$this->location."<br>";
        echo "My course starts at ".$this->time."<br>";
        echo "My course's long is ".$this->duration."<br>";
        echo "In this course we need  ".$this->needs."<br>"."<br>";
    }

}


$person1 = new Mycources();
$person1->first("IT Practicum.","Onyx building.","16:00.","2 hours.","Laptop and interest.");
echo $person1->answers();

$person2= new Mycources();
$person2->first("Arabiv Grammar.","IDU.","14:00.","2 hours.","Notebook,pen and passion.");
echo $person2->answers();



?>