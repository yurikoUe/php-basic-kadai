<?php
// Step2. クラスを作成する

class Food {
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name  = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price() {
        echo $this->price . PHP_EOL;
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height() {
        echo $this->height . PHP_EOL;
    }
}

// Step3. インスタンスを作成し、出力する

$food   = new Food("Apple", 150);
$animal = new Animal("Dog", 60, 15);

print_r($food);
print_r($animal);

// Step4. メソッドへアクセスする

$food->show_price();
$animal->show_height();
