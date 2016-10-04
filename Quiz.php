<?php
//access the global array called $_POST to get the values from the text fields
//$name = $_POST["name"];
//$email = $_POST["email"];

//echo "Name: " . $name . "<br>";
//echo "Email: " . $email . "<br>";

$score = 0;
$percent = 0;

if (isset($_POST['Submit1'])) {

if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) )
{


//----------------Output results!--------------------------------------------------

echo 	"Question 1: In which game did Mario first appear? <br> 
		 You answered: ".$_POST['q1']. "<br>
		 Correct answer: Donkey Kong <br><br>

		 Question 2: In Super Mario World, Mario made friends with a certain dinosaur. His name was:<br>
		 You answered: ".$_POST['q2']. "<br>
		 Correct answer: Yoshi<br><br>

		 Question 3: Mario's first 3D platformer game is:<br>
		 You answered: ".$_POST['q3']. "<br>
		 Correct answer: Super Mario 64<br><br>

		 Question 4: In Super Mario Sunshine for the Gamecube, Mario made friends with a machine named:<br>
		 You answered: ".$_POST['q4']. "<br>
		 Correct answer: FLUDD<br><br>

		 Question 5: What was Mario's successful spin-off series for the NES?<br>
		 You answered: ".$_POST['q5']. "<br>
		 Correct answer: Mario Kart";


//----------------Score!--------------------------------------------------


if($_POST['q1'] == "Donkey Kong")
	$score++;

if($_POST['q2'] == "Yoshi")
	$score++;

if($_POST['q3'] == "Super Mario 64")
	$score++;

if($_POST['q4'] == "FLUDD")
	$score++;

if($_POST['q5'] == "Mario Kart")
	$score++;

echo "<br><br><br>Correct Answers: $score";

$percent = ($score/5)*100;

echo "<br><br>Score: $percent%";

}

}
?>
