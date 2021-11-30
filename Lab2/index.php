<html>
  <head>
    <title>Lab2! :)</title>
    <style type="text/css">
    body {
      background-image: url("https://media2.giphy.com/media/XPlcxsFs8BIKk/giphy.gif?cid=ecf05e47m1j7n0m37fdz5d4td0p76xnjyzpr02h13prr6uik&rid=giphy.gif&ct=g");
      background-repeat: no-repeat;
      background-size: cover;
    }
    p {
      font-size: 158%;
      font-weight: bold;
    }
    p1 {
      color: #EDFD2F;
      background-color: black;
    }
    pre {
      color: black;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
    <?php echo '<p>This is a lab showing PHP and arrays. </p>'; 
    echo '<p> My name is Seth Prevott :) </p>';
    $numberArray=array(0, 1, 2, 3, 4, 5, 6);
    echo "<pre>".
    print_r($numberArray, true)."</pre>";
    echo '<p1> I also had a question, is PHP used for backend development? Ive heard the term full stack developer, and if HTML/CSS is frontend... PHP receiving the info and storing would be backend in my mind. Just wanted to clarify that! </p1>';
    ?>
  </body>
</html>