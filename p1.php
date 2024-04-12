<!DOCTYPE html>
<html>
<body>
<?php
$color="red";
/*hszgjhxvc bhsdfhgvcghdfcvbncvbncd*/
//ujsyaguchvhbsadhcvghsxv ghazcv//
#dhsfghcvsdghcvhndfgvbhvfhgh/

echo "lokesh is a $color boy"."<br>";
echo "lokesh is a $color boy"."<br>";
echo "lokesh is a $color boy"."<br>";

$x=5 /*jxhvdgvhj*/ +5;
echo "<h1> $x is a lokesh marks </h1>"."<br>";
echo "hello world";
echo "<br>";
/*       */
$y="teja";
echo "lokesh is $y's friend"."<br>";
var_dump(5);
echo "<br>";
var_dump("john");
echo "<br>";
var_dump(7.89);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([1,2,4]);
$s=$z=$a=10;
echo "<br>";
echo $s."<br>";
echo $z."<br>";
echo $a."<br>";
echo "<p> variable x inside function is:$x </p>";
function myTest(){
$t=17;
echo "<p> variable x inside function is:$t </p>";}
myTest();
echo "<br>";
$e=14;
$g=20;
function myLok(){
$GLOBALS["Y"]=$GLOBALS["e"]+$GLOBALS["g"];
}
myLok();
echo $Y;
echo "<br>";
function myFunc(){
static $xy=0;
echo $xy;
$xy++;}
myFunc();
echo "<br>";
myFunc();
echo "<br>";
myFunc();
echo "<br>";
echo "<br>";
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>
</body>
</html>

        
