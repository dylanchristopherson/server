<html>
<body>

<br><br>
<a href="index.php">Rerun calculations with different numbers</a>
<br><br>

<?php

// Calculate kilograms from lbs
$lbs_to_kgs_multiplier = 0.453592;
$weightlbs = 0;
$weightlbs = $_POST["weightlbs"];
$calculated_kg = $lbs_to_kgs_multiplier * $weightlbs;

// Calculate height in meters from inches
$inches_to_centimeters_multiplier = 2.54;
$cm_to_meters_multiplier = 0.01;
$heightin = 0;
$heightin = $_POST["height"];
$heightcm = $heightin * $inches_to_centimeters_multiplier;
$heightm = $heightcm * $cm_to_meters_multiplier;

// BMI calculations
$bmi = $calculated_kg / pow($heightm,2);

// Ideal body weight
$gender = $_POST["gender"];
if(empty($gender)) { $gender = "female"; }; // default gender to female if empty
$ideal_weight_modifier=0;
$ideal_weight_multiplier=0;
$five_foot=60;
$height_calculation=$heightin-$five_foot;

if( $gender == "male" ) {
	// Values for males
	$ideal_weight_modifier=106;
	$ideal_weight_multiplier=6;
} else {
	// Values for females
	$ideal_weight_modifier=100;
	$ideal_weight_multiplier=5;
}

$ideal_weight=$ideal_weight_modifier+($ideal_weight_multiplier*$height_calculation);

// Display calculations
echo "<b>General information</b><br>";
echo "In lbs, weight is: {$weightlbs}<br>";
echo "In kgs, weight is: {$calculated_kg}<br>";
echo "In inches, height is: {$heightin}<br>";
echo "In meters, height is: {$heightm}<br>";
echo "Gender is: ${gender}<br>";
echo "<br>";

echo "<b>BMI calculations</b><br>";
echo "In kgs, weight is: {$calculated_kg}<br>";
echo "In meters, height is: {$heightm}<br>";
echo "BMI = kgs * (m^2)<br>";
echo "Calculated BMI: {$bmi}<br>";
echo "<br>";

echo "<b>Ideal body weight calculations</b><br>";
echo "Gender is: ${gender}<br>";
echo "Equation is ({$ideal_weight_modifier} + ({$ideal_weight_multiplier} * ({$heightin} - {$five_foot}))<br>";
echo "Ideal body weight is: {$ideal_weight}<br>";

?>

</body>
</html>
