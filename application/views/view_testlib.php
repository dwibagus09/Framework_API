<?php 

	/* fungsi dibawah ini digunakan untuk memanggil fungsi atau class table
	 dan disimpan di variabel template*/
   $template = array(     
   	'table_open'=> '<table border="1 cellpadding="4" cellspacing="0">', 
   	'table_close'=> '</table>' 
   	);   

   	/* perintah ini digunakan untuk mengeset template dengan class atau fungsi
   	   yang ada dalam variabel "$template"
   	*/
   	$this->table->set_template($template);

   	/* perintah untuk mengeset heading dari table*/
   	$this->table->set_heading(array('No', 'Nama', 'Prodi')); 
   	
   	// variabel num untuk menyimpan No 
   	$num = 1;   

   	// Mencetak data['Mahasiswa'] dengan perulangan foreach //
   	foreach($Mahasiswa as $row) {

   	/* untuk menambahkan array dalam table dengan value dari 
   	   variabel num, row[nama], row[prodi]
   	*/         
   	$this->table->add_row(array($num,$row['nama'],$row['prodi']));    

   	$num++; 
   }

   //untuk menggenerate table dari data array   
   echo $this->table->generate(); 
?> 
 