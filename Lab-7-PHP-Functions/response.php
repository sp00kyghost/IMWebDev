<html>
  <head>
    <style>
    body {
      background-image: url('https://t4.ftcdn.net/jpg/01/43/63/87/360_F_143638762_33BZFGvnkHNPMnjbQXZXnFyB4p7PFSE8.jpg');
      background-repeat: no-repeat;
      background-size: 350px 350px;
    }
    .resp {
      font-size: 45px;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
  <?php
  function Multiply($num1, $num2){
      $result = $num1 * $num2;
      return $result;
    }
  echo '<p class="resp">The result is: ' . Multiply($_GET['num1'], $_GET['num2']) . '!!</p>';
  ?>
  </body>
</html>