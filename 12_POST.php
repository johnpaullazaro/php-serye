<?php 

  if(isset($_POST['todo'])) 
  {
    echo $_POST['todo'];
  }

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
method="POST" >
      <label>To do</label><br>
      <input type="text" name="todo" /><br>
      <label>Description</label><br>
      <input type="text" name="description" />
      <br>
      <input type="submit" name="submit" value="submit"/>
</form> 

</body>
</html>