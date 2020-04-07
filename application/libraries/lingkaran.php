<?php  

	class Lingkaran{    

	/*fungsi keliling digunakan untuk membuat fungsi perhitungan keliling lingkaran
	   dengan 1 parameter "var jari" yang berarti variabel untuk menampung jari-jari,
	   didalam fungsi ini terdapat rumus perhitungan
	   dan juga perintah untuk mencetak hasil hitung dari keliling*/
	function keliling($jari){         
		$keliling = 2*3.14*$jari;         
		echo "Keliling Lingkaran dengan jari-jari : ".$jari." , Adalah = ".$keliling;  
	}    

	/*fungsi luas digunakan untuk membuat fungsi perhitungan luas lingkaran
	   dengan 1 parameter "var jari" yang berarti variabel untuk menampung jari-jari,
	   didalam fungsi ini terdapat rumus perhitungan
	   dan juga perintah untuk mencetak hasil hitung dari luas*/
	function luas($jari){         
		$luas = 3.14*$jari*$jari;         
		echo "Luas Lingkaran dengan jari-jari : ".$jari." , Adalah = ".$luas;  
} 
} 