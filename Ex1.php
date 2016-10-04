<?php 
	$cols = 100;
	$rows = 100;

	echo "<table>";

	for ($i =1; $i < $rows; $i++)
	{
		echo'<tr>';

		for ($j = 1; $j < $cols; $j++)
			echo '<td>' .$i*$j.'</td>';

		echo '</tr>';
	}

	  echo"</table>";
?> 
