<?php

if (isset($_POST['Submit1'])) {

$ship = 0;

$mush = $_POST['item1'];
$mush = $mush *200;

$fflow = $_POST['item2'];
$fflow = $fflow *400;

$iflow = $_POST['item3'];
$iflow = $iflow *500;


echo "<h2> Welcome ".$_POST['user']." </h2>";
echo "(Password: ".$_POST['pass'].")";

echo "<br><br>Mushrooms: ".$_POST['item1']." for $200 each -> Subtotal: $ $mush";
echo "<br><br>Fire Flowers: ".$_POST['item2']." for $400 each -> Subtotal: $ $fflow";
echo "<br><br>Fire Flowers: ".$_POST['item3']." for $500 each -> Subtotal: $ $iflow";

if($_POST['q1'] == "2")
	$ship = 50;
else if($_POST['q1'] == "3")
	$ship = 5;

echo "<br><br>Shipping option cost: $ $ship";

$total = $ship + $mush + $iflow + fflow;

echo "<br><br><h4>Order total: $ $total</h4>";



}


?>
