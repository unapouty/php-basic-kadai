<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    //フード
    // クラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      public function show_price(int $price) {
        $this->price =$price;
      }
      
      // メソッドを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
  }
        // インスタンス化
    $food = new Food('potato',250);

    print_r($food);
  
    echo '<br>';

  //アニマル
  // クラスを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      public function show_height(int $height) {
        $this->height = $height;
    }

      // メソッドを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;

      }
    }
    $animal= new Animal('dog', 60, 5000);
    print_r($animal);

    $food->show_price(250);
    $animal->show_height(60);

    ?>
</body>
</html>