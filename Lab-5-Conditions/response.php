<html>
  <head>
    <style>
      .resp {
        font-weight: bold;
        font-size: 38px;
        color: white;
        text-align: center;
      }
      body {
        background-image: url('https://hipfonts.com/wp-content/uploads/2020/07/Netflix-Logo.png');
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
  </head>
  <body>
  <?php
  $choice = $_POST["moviechoice"];

  switch ($choice) {
    case "1":
    echo '<div class="resp">You have selected the movie: Goodfellas!</div>';
    break;
    case "2":
    echo '<div class="resp">You have selected the movie: John Wick!</div>';
    break;
    case "3":
    echo '<div class="resp">You have selected the movie: Nacho Libre!</div>';
    break;
    default: 
    echo '<div class="resp">Please try again!</div></br>
          <div class="resp">Please select a number between 1 to 3.</div>';
  }
  ?>
  </body>
</html>