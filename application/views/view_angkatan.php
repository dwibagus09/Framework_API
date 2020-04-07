<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		td{
			padding-right:30px;
		}
	</style>
</head>
<body>
	<h3><u>DATA ANGKATAN</u></h3>
	<!-- Mencetak data['Angkatan']  dari method angkatan di controller dengan perulangan foreach-->
	<table class="table" border="2" >
	<tr>
	<td>
		No. 
	</td>
	<td>
		Angkatan 
	</td>
	
	</tr>
	<?php
	$no = 1;
	foreach ($Angkatan as $row) {
		echo "<tr>";
		echo "<td>";
		echo  $no;
		echo "</td>";
		echo "<td>";
		echo $row['Angkatan'];
		echo "</td>";
		echo "</tr>";
		
		$no++;
	}
	?>
</table>
	
</body>
</html>