<html>
  <head>
    <style>
    body {
      background-image: url('https://wallpaperaccess.com/full/1115092.jpg');
      background-repeat: no-repeat;
      background-size: 100% 100%
    }
    .total {
      color: white;
      font-size: x-large;
    }
    </style>
  </head>
  <body>
<p style="color: white; font-size: x-large">The numbers added together equal:</p>
<?php 
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

echo "<span class='total'>" . ($num1 + $num2) . "</span>"

?>

  </body>
</html>