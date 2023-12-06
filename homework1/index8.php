<?php

class Book{
    public $name;
    public $genre;
    public $color;
    public $language;
    public $author;
    public $price;

    public function turn($question){
        return $question;
    }


public function __construct($name,$genre,$color,$language,$author,$price){
    $this->name=$name;
    $this->genre=$genre;
    $this->color=$color;
    $this->language=$language;
    $this->author=$author;
    $this->price=$price;
}


 public function myBook(){

    echo "My book name is ".$this->name."<br>";
    echo "My book genre is " .$this->genre."<br>";
    echo "My book color is ".$this->color."<br>";
    echo "My book language is " .$this->language."<br>";
    echo "My book's author is ".$this->author."<br>";
    echo "My book's price is ".$this->price."<br>";

 }
}



$reader1 = new Book("1984.","detective.","white.","english.","Jorj Ouell.","15$.");
echo $reader1->myBook();
echo $reader1->turn("What about you guys?")."<br>"."<br>";

$reader2 = new Book("O'tkan kunlar.","historical.","blue.","uzbek.","Abdulla Qadiriy.","100$.");
echo $reader2->myBook();
echo $reader2->turn("That's all for today")."<br>";


?> 