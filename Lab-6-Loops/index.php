<html>
  <head>
    <style>
    h1{
      text-align: center;
      color: cyan;
      font-weight: bold;
      text-decoration: underline;
    }
    .p1 {
      text-align: center;
      color: cyan;
      font-weight: bold;
    }
    .p2 {
      color: cyan;
      font-weight: bold;
    }
    body {
      background-image: url('https://media4.giphy.com/media/L7fXKmoT5e7QD5WC0D/giphy.gif?cid=ecf05e47xfhuxdaipyna1wm77r4fnheibs38l89d11xgo4ra&rid=giphy.gif&ct=g');
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<h1>Lab 6 Loops!</h1>'; 
          echo '<p class="p1">Program created by Seth Prevott.</p>';
          echo '<p class="p1">Enter the amount of times to loop (months).</p>';
          echo '<form action="response.php" method="post"><p class="p2">Starting Amount:</p><input type="number" name="startnum" placeholder="Enter Starting Amount"><br>
          <p class="p2">Monthly Contribution:</p><input type="number" name="contribnum" placeholder="Enter Monthly Contribution"><br>
          <p class="p2">Amount of months:</p><input type="number" name="months" placeholder="Enter Amount of Months"><br>
          <input type="submit">
          </form>';
    ?> 
  </body>
</html>