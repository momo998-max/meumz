<!DOCTYPE html>
<html>
<head>
	<title>Exercice2</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			position: relative;
			left: 30%;
			top: 20px;
			width: 10%;
			height: 100px;
		}
		body{
			position: relative;
			width: 90%;
			left: 5%;
		}
	</style>
</head>
<body>
	<center><h3>Afficher les mois avec la langue de votre choix!</h3><br>
	<form method="POST" action="Exercice2.php">
		<select name="langue">
			<option value="franc" style="background-color:#0000FF">Francais</option>
			<option value="ang"style="background-color:#C0C0C0">Anglais</option>
		</select>
		<input type="submit" style="background-color:red" name="choisir" value="choisir">
	</form></center>


	<?php 
	ini_set('display_errors', 'off');
	$langue=$_POST['langue'];
	$tabMois = array("franc" =>array(1=>"Janvier","Fervrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre") ,
					"ang"=>array(1=>"January","February","March","April","May","June","July","August","September","October","November","December") );
	$i=0;$k=1;
	if ($langue=='franc') {
		echo "<table border><tr>";
		foreach ($tabMois["franc"] as $key => $value) {
			echo "<td class='a".$k."'>$key</td><td class='a".$k."'>$value</td>";
			$i++;
			if ($i%3==0) {
				echo "</tr>";
				$k++;
			}
			
		}
		
	}
	elseif ($langue=='ang') {
		echo "<table border><tr>";
		foreach ($tabMois["ang"] as $key => $value) {
			echo "<td class='a".$k."'>$key</td><td class='a".$k."'>$value</td>";
			$i++;
			if ($i%3==0) {
				echo "</tr>";
				$k++;
			}
		}
	}
	 ?>

<style type="text/css">
	.a1{
		background-color: #98cad4;

	}
	.a2{
		background-color: #4acf84;
	}
	.a3{
		background-color: #b8e6cb;
	}
	.a4{
		background-color: #e6deb8;
	}
</style>
</body>
</html>