<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>

  <?php
  $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

  $total = array_sum($scores);
  $count = count($scores);
  $average = $total / $count;

  echo $average;

?>

</body>

</html>