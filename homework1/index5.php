<?php

class MyDreamHouse{


    public $location;
    public $roomCount;
    public $color;
    public $floor;
    public $style;
    public $best;


    public function initial($location,$roomCount,$color,$floor,$style,$best){
        $this->location=$location;
        $this->roomCount=$roomCount;
        $this->color=$color;
        $this->floor=$floor;
        $this->style=$style;
        $this->best=$best;


    }


    public function myHouse(){
       
        echo "My dream house will be located in ".$this->location."<br>";
        echo "There will be " .$this->roomCount." rooms in my dream house."."<br>";
        echo "My dream house's color will be in ".$this->color."<br>";
        echo "There will be " .$this->floor. " floors in my dream house."."<br>";
        echo "My dream house's style will be in ".$this->style."<br>";
        echo "I really pay attention to my new house's ".$this->best."<br>";
    }

}


$person1 = new MyDreamHouse();
$person1->initial("Saudi Arabia.","8","white.","2","hi-tech.","kitchen.");
echo $person1->myHouse();





?>