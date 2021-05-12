<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $str = 'progate';

    // strlenを用いて$strの長さをechoする
    echo strlen($str);
    echo '<br>';

    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をechoする
    echo count($array);
    echo '<br>';

    // randを用いて10から15までのランダムな数字をechoする
    echo rand(10, 15);

  ?>

</body>
</html>
