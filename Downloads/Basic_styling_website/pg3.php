<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$body_typeErr = $websiteErr = "";
$body_type = $comment = $website = "";
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
  }

  if (empty($_POST["body_type"])) {
    $body_typeErr = "REQUIRED";
  }
   else {
   }

?>

<h2>Let's Know Your Body Type & Choices First</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  BODY TYPE:
  <input type="radio" name="body_type" <?php if (isset($body_type) && $body_type=="thin") echo "checked";?> value="thin">Thin
  <input type="radio" name="body_type" <?php if (isset($body_type) && $body_type=="medium") echo "checked";?> value="medium">Medium
  <input type="radio" name="body_type" <?php if (isset($body_type) && $body_type=="curvy") echo "checked";?> value="curvy">Curvy  
  <span class="error">* <?php echo $body_typeErr;?></span>
  <br><br>

  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $comment;
echo "<br>";
echo $body_type;
?>

</body>
</html>
