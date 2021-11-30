<html>
  <head>
    <style>
    h3 {
      text-align: center;
      color: brown;
    }
    .p1 {
      text-align: center;
      color: brown;
      font-weight: bold;
      font-size: 20px;
    }
    .p2 {
      color: brown;
      font-weight: bold;
      font-size: 20px;
    }
    body {
      background-image: url('https://i.imgur.com/ylyzB2J.gif');
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
    <title>PHP Functions Test</title>
  </head>
  <body>
    <?php 
    echo '<h3>Using PHP Function to multiply numbers!</h3>'; 
    echo '<p class="p1">Program Created by: Seth Prevott</p>';
    echo '<form action="response.php" method="get">
    <p class="p2">Number 1:</p><input type="number" name="num1" placeholder="First Number">
    <p class="p2">Number 2:</p><input type="number" name="num2" placeholder="Second Number"><br>
    <input type="submit">
    </form>';
    ?> 
  </body>
</html>