<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAILY CHALLENGE</title>
</head>
<body>
<form  method="post">
  Name: <input type="text" name="input_name"><br><br>
  Colors:<br>
  <input type="checkbox" name="colors[]" value="gray">Gray<br>
  <input type="checkbox" name="colors[]" value="white">Blue<br>
  <input type="checkbox" name="colors[]" value="green">Green<br>
  <input type="checkbox" name="colors[]" value="orange">Orange<br>
  <input type="submit" value="Submit"/>
</form>
</body>
</html>
<?php
if (isset($_POST['input_name']) && isset($_POST["colors"])) {
  $name = $_POST['input_name'];
  $colors = implode(", ", $_POST["colors"]);

  echo "Name: " . $name . "<br>";
  echo "Colors: " . $colors;
} else {
  echo "Name and colors selection is mandatory.";
}
?>
