<html>
  <head>
  <style>
    p {
      color: red;
      text-align: center;
      font-weight: bold;
      text-decoration: underline;
    }
    h1 {
      text-align: center;
      font-style: italic;
      color: red;
    }
    input[type=text] {
      width: 45%;
      padding: 10px;
      margin: 10px;
      box-position: 10px 10px;
    }
    body{
      background-image: url('https://media2.giphy.com/media/gFhZjOtzoutSvckWPM/giphy.gif?cid=ecf05e47n8rllslq6kgvcfo82cyjj8rs1tw636zpyj5zclg0&rid=giphy.gif&ct=g');
      background-repeat: no-repeat;
      background-size: cover;
    }
    label{
      color: red;
      font-weight: bold;
      text-decoration: underline;
    }
  </style>
    <title>PHP Test with files and Email</title>
  </head>
  <body>
    <?php 
    echo '<p> A quick program put together for PHP File and email practice.</p>';
    echo '<h1> Webpage and Program created by: Seth Prevott</h1>'; 
    echo '<form action="response.php" method="post">
    <label for="fname">First Name: <input type="text" name="fname"><br>
    <label for="lname">Last Name: <input type="text" name="lname"><br>
    <input type="submit">
    </form>'
    ?> 
  </body>
</html>