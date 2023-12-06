<?php

class MySelf{


    public $name;
    public $surnmae;
    public $age;
    public $birthtime;
    public $placeOfBirth;
    public $hobby;


    public function intro($name,$surnmae,$age,$birthtime,$placeOfBirth,$hobby){
        $this->name=$name;
        $this->surnmae=$surnmae;
        $this->age=$age;
        $this->birthtime=$birthtime;
        $this->placeOfBirth=$placeOfBirth;
        $this->hobby=$hobby;


    }


    public function aboutMe(){
        echo "My name is ".$this->name."<br>";
        echo "My surname is ".$this->surnmae."<br>";
        echo "My current age is ".$this->age."<br>";
        echo "I was born in ".$this->birthtime."<br>";
        echo "My place of birth is ".$this->placeOfBirth."<br>";
        echo "My hobbies are ".$this->hobby."<br>"."<br>";
    }

}


$person1 = new MySelf();
$person1->intro("Azizbek.","Jo'rayev.","20.","15/06/2004.","Andijan,Shahrikhan.","learning new languages and playing table tennis.");
echo $person1->aboutMe();





?>