<?php
class Myschool{

public $name;
public $type;
public $location;

public function info($name,$type,$location){
    $this->name=$name;
    $this->type=$type;
    $this->location=$location;
}


public function allInfo(){
    echo "My school's name is ".$this->name."<br>";
    echo "My school's type is ".$this->type."<br>";
    echo "My school is located in ".$this->location."<br>";
}

public function myDir($director){
    return $director;
}



}


$child1 = new Myschool();
$child1->info("49th school.","Public.","Andijan region.");

echo $child1->allInfo();
echo "Our school's director is ".$child1->myDir("Ergashev Abrorbek.")

?>