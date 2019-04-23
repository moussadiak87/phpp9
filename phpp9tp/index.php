<?php
$numberDayInMonth = 31;
$firstWeekDayOfMonth = 2;
$casaapaser = 1;
$numberOfTr = 5;
$numberOfTd = 35;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8" />
	<title>phpp9tp</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Lundi</th>
				<th>Mardi</th>
				<th>Mercredi</th>
				<th>Jeudi</th>
				<th>Vendredi</th>
				<th>Samedi</th>
				<th>Dimanche</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php for($td = 1; $td <= $numberOfTd; $td ++){
					if($td >= $firstWeekDayOfMonth){
						?>
						<td>x</td>
					<?php	}else{ ?>
						<td>o</td>
						<?php
					}
					if($td %7 == 0){
						?>
						<tr></tr>
						<?php
					}
				}
				?>
			</tr>
		</tbody>
	</table>
</body>
</html>
