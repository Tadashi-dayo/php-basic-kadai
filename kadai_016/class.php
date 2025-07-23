<!-- http://localhost/kadai_016/class.php -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>

<?php

  class Food{
    public $name;
    public $price;

        // コンストラクタ：値を初期化
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
      echo $this -> price . "<br>";
    }

  }

  class Animal{
    public $name;
    public $height;
    public $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
      echo $this -> height . "<br>";
    }
  }

// インスタンス作成
$potato = new Food("potato", 250);
$dog = new Animal("dog", 60, 5000);

print_r($potato);
echo "<br>";
print_r($dog);
echo "<br>";

$potato -> show_price();
$dog -> show_height();

?>

</body>

</html>