<!DOCTYPE html>
<html>
<head>
	<title>Page3</title>
</head>
<body>
<h2>Let's Know Your Body Type & Choices First</h2>

<?php
if(isset($_POST['submit'])){
	$body_type=$_POST['body_type'];
	$body_tone=$_POST['body_tone'];
	$fitting_pref=$_POST['fitting_pref'];
	$tones_pref=$_POST['tones_pref'];
	$colors_pref=$_POST['colors_pref'];
	$accessories=$_POST['accessories'];
	$experiment=$_POST['experiment'];
	if(empty($body_type)||empty($body_tone)||empty($p)||empty($g)||empty($add)){
		echo 'Fill all the fields';
	}
	else{
		echo "Welcome $name"."<br>"."Please check your details:"."<br>";
		echo "E-Mail ID: $body_type"."<br>";
		echo "Gender: $g"."<br>";
		echo "Address:"."<br>"."$add,"."<br>"."$city"."<br>";
		echo "Preferences:"."<br>";
		$count=0;
		foreach ($pref as $selected) {
			echo "$selected"."<br>";
			$count++;
		}
		if($count==0){
			echo "None";
		}
		else{
		}
  ?>
  <form action="http://localhost:4000/Desktop/WEb Project/code/page3.php" method="POST">
  	
  	<label>Gender:</label><br>
	<input type="radio" name="gender" value="Female">
	<label for="f">Female</label><br>
	<input type="radio" name="gender" value="Male">
	<label for="m">Male</label><br><br>

	<label>Select your preferences</label><br>
	<input type="checkbox" id="v" name="pref[]" value="Vegetarian">
	<label for="v">Vegetarian</label><br>
	<input type="checkbox" id="nv" name="pref[]" value="Non-Vegetarian">
	<label for="nv">Non-Vegetarian</label><br>
	<input type="checkbox" id="da" name="pref[]" value="Dairy">
	<label for="da">Dairy</label><br><br>

	<input type="submit" name="submit" value="submit" />
	<input type="reset" name="reset" value="reset"/>
</form>
</body>
</html>