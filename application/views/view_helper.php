<html>
<head>
	<title> Heading Helper HTML </title>
</head>
<body>

	<?php
		//mencetak Heading
		echo Heading("Hello CI",1);
		echo Heading("Hello CI",2);
		echo Heading("Hello CI",3);
		echo Heading("Hello CI",4);
		echo Heading("Hello CI",5);
		echo Heading("Hello CI",6);
		
		//variabel gambar bertipe array yang didalam terdapat url untuk menampilkan gambar
		$gambar = array(
			'src'=>'https://static.cdn-cdpl.com/source/17045/codeignitor_service_provider-image(700x350-crop)-image(700x350-crop).jpg',
			'alt'=>'Codeignitor-CI',
			'class'=>'post_images',
			'width'=>'300',
			'height'=>'300',
			'title'=>'Artesonjaru Mountain'
		);
		//cetak gambar
		echo img($gambar);
	?>

</body>
</html>