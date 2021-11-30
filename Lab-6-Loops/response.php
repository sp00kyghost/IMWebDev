<html>
  <head>
    <style>
    body {
      background-image: url('https://media4.giphy.com/media/L7fXKmoT5e7QD5WC0D/giphy.gif?cid=ecf05e47xfhuxdaipyna1wm77r4fnheibs38l89d11xgo4ra&rid=giphy.gif&ct=g');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .resp {
      color: cyan;
      font-size: 26px;
      font-weight: bold;
    }
    .loopresp {
      color: cyan;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
  <?php 
  echo '<div class="resp">';
    echo 'After adding $';
    echo $_POST["contribnum"];
    echo ' dollars to a starting amount of $';
    echo $_POST['startnum'];
    echo ' for ';
    echo $_POST['months'];
    echo ' months, you would have: $';
  $startn = $_POST['startnum'];
  $contrib = $_POST['contribnum'];
  $months = $_POST['months'];
  $total = $contrib * $months + $startn;
    echo $total;
    echo ' dollars total.<br>';
  echo '</div>';
  echo '<br>';
  echo '<div class="loopresp">';
  
  for($x=1;$x<=$_POST['months'];$x++){
    $y = $contrib * $x;
    echo "Month $x : $" . $y . " dollars.<br>";
  }
    echo "On top of your initial $" . $startn . " is $" . $total . " dollars.";
  echo '</div>';
  ?>
  </body>
</html>