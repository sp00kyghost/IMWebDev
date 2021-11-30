<html>
  <head>
    <style>
    h1 {
      text-align: center;
    }
    li {
      font-weight: bold;
    }
    body {
      background-image: url('https://i.pinimg.com/originals/e8/70/1c/e8701c982aaf5a6f9a93aa17a2cffd90.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
    <title>Conditions test</title>
  </head>
  <body>
    <?php echo '<h1>Top 3 Movies</h1>'; 
    echo '<p style="text-align:center; font-style: italic;">Program Created by: Seth Prevott</p1><br>';
    echo '<p style="font-weight:bold">Seth\'s Top 3 Movies</p>';
    echo '<ol type="1">
            <li>Goodfellas</li>
            <li>John Wick</li>
            <li>Nacho Libre</li>
          </ol>';
     echo '<p style="font-weight:bold">Please enter a number into the form below.</p><br>';

     echo '<form action="response.php" method="post">
     Please enter number here: <input type="number" name="moviechoice"><br>
     <input type="submit">
     </form>'
    ?> 
  </body>
</html>