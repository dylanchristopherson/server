<!DOCTYPE html>
<html>
<title>Nutrition</title>

<h1>Nutrition calculator</h1>

<!--So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.(Used for input validation - https://www.w3schools.com/php/php_form_validation.asp)-->
<!--<form action="action_page.php" method="post">-->


<?php
// define variables and set to empty values
// Strip unecessary characters
// Remove backslashes

echo "<br>";
$weightlbsErr = $heightErr = $genderErr = "";
$weightlbs = $height = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["weightlbs"])) {
  	$weightlbsErr = "Weight in lbs is required";
  } else {
  	$name = test_input($_POST["weightlbs"]);
  }

  if (empty($_POST["height"])) {
  	$height = "Height in inches is required";
  } else {
  	$name = test_input($_POST["weightlbs"]);
  }  

  if (empty($_POST["gender"])) {
  	$genderErr = "Gender is required";
  } else {
  	$name = test_input($_POST["gender"]);
  }  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!-- <form method="post" action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->

<form method="post" action="action_page.php">
	<label for="weightlbs">Weight (lbs):</label>
	<input type="number" id="weightlbs" name="weightlbs"><br>
	<br>
	<!-- <span class="error"><?php echo $weightlbsErr;?><br></span> -->
	
	<label for="height">Height (in):</label>
	<input type="number" id="height" name="height"><br>
	<br>
	<!-- <span class="error"><?php echo $height;?><br></span> -->

	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male<br>
	<!-- <span class="error"><?php echo $genderErr;?><br></span> -->
	
	<p>Note: The above radio buttons default to female</p>

	<input type="submit" value="Submit">


	<!--
	<span class="error"* <?php //echo $weightlbsErr;?></span>
	-->

	<!--
	<label for="weightkgs">Weight (kgs):</label>
	<input type="number" id="weightkgs" name="weightkgs"><br><br>
	-->
</form>


</html>
