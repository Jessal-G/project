<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function __construct($name,$color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
  }
  
}

$apple = new Fruit("apple","red");
$banana = new Fruit("banana","yellow");
$orange = new Fruit("orange","orange");
?>
 
</body>
</html>