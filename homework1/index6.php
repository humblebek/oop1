<?php

class MyDreamHotel{
    public $location;
    public $roomCount;
    public $color;
    public $floor;
    public $style;
    public $best;


    public function __construct($location,$roomCount,$color,$floor,$style,$best){
        $this->location=$location;
        $this->roomCount=$roomCount;
        $this->color=$color;
        $this->floor=$floor;
        $this->style=$style;
        $this->best=$best;
    }


    public function myHotel(){  
        echo "My dream hotel will be located in ".$this->location."<br>";
        echo "There will be " .$this->roomCount." rooms in my dream hotel."."<br>";
        echo "My dream hotel's color will be in ".$this->color."<br>";
        echo "There will be " .$this->floor. " floors in my dream hotel."."<br>";
        echo "My dream hotel's style will be in ".$this->style."<br>";
        echo "I really pay attention to my new hotel's ".$this->best."<br>";
    }

}


$person1 = new MyDreamHotel("Turkey.","12","blue.","3","classic.","bedroom.");
echo $person1->myHotel();





?>