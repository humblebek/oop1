<?php

class Myuniversity{

    public $name;
    public $location;
    public $major;

    public $ceo;
    public $rector;
    public $accountant;

    public function slogan(){
        return "'Learn,earn and change the world!!! '";
    }


    public function allInfo($name,$location,$major){

        $this->name=$name;
        $this->location=$location;
        $this->major=$major;

    }

    public function allStaff($ceo,$rector,$accountant){

        $this->ceo=$ceo;
        $this->rector=$rector;
        $this->accountant=$accountant;

    }

    public function overall(){

        echo "Our university's CEO is ".$this->ceo."<br>";
        echo "Our university's Rector is ".$this->rector."<br>";
        echo "Our university's Accounter is ".$this->accountant."<br>";
    }
}

$student1 = new Myuniversity();
$student1->allInfo("International Digital University","Darhon","Information Tecnology");

echo "My university name is". $student1-> name."<br>";
echo "My university is located in". $student1-> location."<br>";
echo "My university major is". $student1-> major."<br>";
echo "And our Slogan is ".$student1->slogan()."<br>"."<br>"."<br>";


$student2 = new Myuniversity();
$student2->allStaff("Ibrokhim Khurramov","Alan De France","Temur Hatamovich");
echo $student2->overall();
echo "One more time our Slogan is ".$student2->slogan()."<br>"."<br>"."<br>";


?>