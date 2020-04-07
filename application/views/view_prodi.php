<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		td{
			padding-right:20px;
		}
	</style>
</head>
<body>
	<h3><u>DATA PRODI</u></h3>
	<!-- Mencetak data['Prodi']  dari method prodi di controller dengan perulangan foreach-->
	<table class="table" border="2" >
	<tr>
	<td>
		No. 
	</td>
	<td>
		Prodi 
	</td>
	<td>
		Keterangan 
	</td>
	</tr>
	<?php
	$no = 1;
	foreach ($Prodi as $row) {
		echo "<tr>";
		echo "<td>";
		echo  $no;
		echo "</td>";
		echo "<td>";
		echo $row['prodi'];
		echo "</td>";
		echo "<td>";
		echo $row['ket'];
		echo "</td>";
		echo "</tr>";
		
		$no++;
	}
	?>
</table>
	
</body>
</html>