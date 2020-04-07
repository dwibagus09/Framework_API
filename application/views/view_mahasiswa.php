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
	<h3><u>DATA MAHASISWA</u></h3>
	<!-- Mencetak data['Mahasiswa'] dari method index dengan perulangan foreach-->
	<?php
	$no = 1;
	foreach ($Mahasiswa as $row) {
		
		echo "NAMA :" .$row['nama'];
		echo"<br>";
		echo "PRODI :" .$row['prodi'];
		echo "<hr>";
		
		$no++;
	}
	?>
</table>
	
</body>
</html>