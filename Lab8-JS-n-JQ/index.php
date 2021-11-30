<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    h1, h3 {
      text-align: center;
    }
    .bigtext {
      font-weight: bold;
      font-size: xx-large;
    }
    </style>
    <title>Lab8-JS n JQ</title>
    <script>
    $(document).ready(function(){
        alert("Welcome!!");

        var matched = $(".content *");
        $("#formoutput").text("Number of items in form: " +matched.length);

        $("#btn1").click(function(){
          $("#txt").hide();
        });

        $("#btn2").click(function(){
          $("#txt").show();
          $("#txt").addClass("bigtext");
        });

        $("#form1").submit(function(e) {
          e.preventDefault();
        });
    });
    </script>
  </head>
  <body>
    <?php echo '<h1>Lab8 JS n JQ!</h1>'; 
          echo '<h3>Created by Seth Prevott</h3><br>';

          echo '<div id="formoutput"></div>';
          echo '<div class="content">
                  <form id="form1" form  method="post">
                    First Name:<br>
                    <input type="text" id="fname" name="fname"><br><br>
                    <button type="submit" value="Submit">Submit</button>
                    <button type="reset"  value="Reset">Reset</button>
                  </form>
                  </div>';
          echo '<p id="txt">Test Test Test<br>
          Test Test Test<br>
          Test Test Test</p>';

          echo '<button id="btn1">Hide Text</button>';
          echo '<button id="btn2">Large Text</button>';

          echo '<div id="output"></div>';
          echo '<script language="javascript">
                  var x=document.getElementsByTagName("Button");
                  document.getElementById("output").innerHTML = ("Number of Buttons on page: "+x.length);
                  </script>';
    ?> 
  </body>
</html>