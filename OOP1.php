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

class user{
    public $name;
    public $eamil;
    public $password;


    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->eamil = $email;
        $this->password = $password;
    }
}

$user1 = new User('sami','email','password');
var_dump($user1);
