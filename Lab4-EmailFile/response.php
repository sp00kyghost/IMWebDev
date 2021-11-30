<html>
  <head>
  <style>
  body {
    background-image: url('https://www.pinclipart.com/picdir/middle/179-1791857_download-mickey-mouse-thumbs-up-transparent-clipart.png');
    background-repeat: no-repeat;
    background-size: 80% 100%;
  }
  p{
    text-align: center;
    font-weight: bold;
    text-decoration: underline;
    font-size: 180%;
    color: lightblue;
  }
  </style>
  </head>
  <body>
    <?php
    $createdfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($createdfile, $_POST["fname"] . "\n");
    fwrite($createdfile, $_POST["lname"]);
    fclose($createdfile);

    echo '<p>The file has been created! :)</p>';
    ?>
  </body>
</html>