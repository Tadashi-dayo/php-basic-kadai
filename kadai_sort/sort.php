<!-- http://localhost/kadai/sort.php -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>

  <?php

  function sort_2way($array , $order = true){
    if($order === true) {
      sort($array);
    }
    else{
      rsort($array);
    }
    return $array;
  }

    // ソートする配列を宣言
  $nums = [15, 4, 18, 23, 10 ];

  $sortArray = sort_2way($nums,true);
  echo "昇順にソートします。<br>";
  foreach($sortArray as $value) {
    echo $value . "<br>";
  }

  $rsortArray = sort_2way($nums,false);
  echo "降順にソートします。<br>";
  foreach($rsortArray as $value) {
    echo $value . "<br>";
  }

?>

</body>

</html>