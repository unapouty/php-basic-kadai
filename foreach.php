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
    $plant_name =  ['name' => '名前:玉ねぎ', 'price' => '値段:200', 'area' => '産地:北海道'];
    foreach($plant_name as $key => $value) {
    }
    foreach ($plant_name as $value) {
      echo $value . '<br>';
  }
  ?>

  </p>
</body>
</html>