<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>16章課題</title>
</head>
<body>
    <?php
    class Food {
        private $name;
        private $price;

        public function __construct(string $food_name, int $food_price) {
            $this->name = $food_name;
            $this->price = $food_price;
        }

        public function show_price() {
            echo $this->price;
        }
    }

    $food = new Food('potato', 250);

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height() {
            echo $this->height;
            
        }
    }

    $animal = new Animal('dog', 60, 5000);

    print_r($food);
    echo '<br>';

    print_r($animal);
    echo '<br>';
    $food->show_price();
    echo '<br>';
    $animal->show_height();
    ?>
</body>
</html>