<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    class car{
        public $brand;
        public $model;
        public $color;
        public function __construct($brand, $model, $color){
            $this->brand = $brand;
            $this->model = $model;
            $this->color = $color;
        }
        public function intro(){
            echo "The car is a {$this->color} {$this->brand} {$this->model}";
            echo "<br>";
        }
        public function message(){
            echo "we are the real cars ";
            echo "<br>";
        }
    }
    class ev extends car{
        public function message(){
            echo "we are not cars ";
            echo "<br>";
        }
    }
    $ev= new ev("tesla","model-x","black");
    $ev->message();
    $ev->intro();
    $porsche= new car("porsche","911","skyblue");
    $porsche->message();
    $porsche->intro();
    $lamborghini= new car("lamborghini","aventadoe svj","matteblack");
    $lamborghini->intro();
    ?>
</body>
</html>