<!-- http://localhost/kadai_011/foreach.php -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>

  <?php
  $sample = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
  );

  foreach($sample as $key => $value) {
    echo $key . " : " . $value . "<br>";
  }

  ?>

</body>

</html>