<?php
class TV {  // class with name
    public $model="xyz";
    public $valume = 1;

    function valumeUp()
    {
        $this->valume++;
    }
    function valumeDown()
    {
        $this->valume--;
    }
}

$tv_one = new TV; // Object declear 
$tv_two = new TV; // Object declear 

echo $tv_one->valumeUp();
