<?php 
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>	
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
		<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$no=1;
					foreach ($user as $baris) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $baris->username; ?></td>
						<td><?php echo $baris->nama; ?></td>
						<td><?php echo $baris->grup; ?></td>
						<td>
							<?php 
							if($getGrup==1){
								echo '<a href="'.base_url('Mahasiswa/edit/'.$baris->id).'" class="fa fa-edit"></a>';
								echo " ";
								echo '<a href="'.base_url('Mahasiswa/hapus/'.$baris->id).'" class="fa fa-times"></a>';

							}
							?>
						</td>						
					</tr>
					<?php 
					}
					?>
				</tbody>
			</table>
		</div>
		<a href="Mahasiswa/tambah" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Data</span>
		</a>

		
		</div>
		</div>
	</div>