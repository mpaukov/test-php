<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>

  <?php
  define("pi", 3.1415926535);
  $r = 10;
  $length = 2 * pi * $r;
  echo "The circumference of radius ", $r, " is equivalent ", $length;
  $square = pi * pow($r, 2);
  echo "<br>Area of a circle of radius ", $r, " is equivalent ", $square;
  ?>

</body>

</html>