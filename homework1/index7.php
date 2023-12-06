 <?php

class MyPhone{
    public $name;
    public $brand;
    public $color;
    public $battery;
    public $memory;
    public $type;



public function __construct($name,$brand,$color,$battery,$memory,$type){
    $this->name=$name;
    $this->brand=$brand;
    $this->color=$color;
    $this->battery=$battery;
    $this->memory=$memory;
    $this->type=$type;
}


 public function myPhone(){

    echo "My phone name is ".$this->name."<br>";
    echo "My phone brand is " .$this->brand."<br>";
    echo "My phone color is ".$this->color."<br>";
    echo "My phone battery capasity is " .$this->battery."<br>";
    echo "My phone memory is ".$this->memory."<br>";
    echo "My phone type is ".$this->type."<br>";

 }
}



$men1 = new MyPhone("iPhone 15","Apple","blue","5000maP","8/256","S");
echo $men1->myPhone();


?> 