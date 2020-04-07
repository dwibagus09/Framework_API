<?php
 
$this->benchmark->mark('code_start');
$template = array(
	'table_open'=>'<table border="1" cellpadding="4" cellspacing="0">',
	'table_close'=> '</table>'
);
$this->table->set_template($template);
$this->table->set_heading(array('no','nama','prodi'));
$num = 1;
 
foreach($Mahasiswa as $row)
{
	$this->table->add_row(array($num,$row['Nama'],$row['Prodi']));
	$num++;
}	
echo $this->table->generate();
$this->benchmark->mark('code_end');
echo "</br>";
echo "Total waktu eksekusi : "; echo $this->benchmark->elapsed_time('code_start', 'code_end');
echo "</br>";
echo "Memory yang digunakan : "; echo $this->benchmark->memory_usage();
?>
