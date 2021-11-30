<html>
  <style>
  body {background-color: lime;}
  p {color: Blue;
     border-style: solid;
     width: 75%;
     padding: 8px 16px 16px 8px;
     margin: 13px 18px 18px 13px;}
  table, td {border:1px solid black;}
  td {font-weight: bold;
      font-style: italic;}
  </style>
  <head>
    <meta name="author" content="Seth Prevott">
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World, Welcome to PHP!</p>'; ?> 
    <h1> This is our header for Lab1 </h1>
    <p>This is our test paragraph,<br> with a break tag in the middle.</p>
    <table>
      <tr>
        <th> Best Programming Class?</th>
      </tr>
      <tr>
        <td> Intermediate Web Programming</td>
      </tr>
    </table>
    &nbsp;
    <form>
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname">
    </form>
  </body>
</html>