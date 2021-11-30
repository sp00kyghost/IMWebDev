<html>
  <head>
  <style>
  h1 {
    text-align: center;
    color: white;
  }
  body {
    background-image: url("https://wallpaper.dog/large/10981780.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%
  }
  p {
    color: white;
  }
  label {
    color: white;
  }
  </style>
    <title>Adding Numbers Together</title>
  </head>
  <body>
    <h1> Adding Numbers</h1>
    <p style="text-align: center; color: white"> Developed by: Seth Prevott</p>
    <p>Put a number into each slot and press the button to add them together.</p>
    <form action="response.php" method="post">
      <label for="num1">Number One:</label><br>
      <input type="number" name="num1"><br>
      <label for="num2">Number Two:</label><br>
      <input type="number" name="num2"><br>
      <input type="submit" value="Add!">
    </form>
  </body>
</html>