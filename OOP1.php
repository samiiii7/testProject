<?php
/*class Fruit{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo " This fruit is {$this->name} and the color is {$this->color}<br>";
    }

}
class strawberry extends Fruit {
    function mes() {
        echo " now in mes this fruit is $this->name <br>";
        $this->intro();
    }
}

$straw = new strawberry("strawberry","red");
echo $straw->mes();*/


class Weather {
    public static function convertor($tem) {
        return $tem *9 / 5 + 32;
    }
}

echo Weather::convertor(50);