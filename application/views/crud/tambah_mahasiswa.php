<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h-4 text-gray-900 mb-4">
					Tambah User
				</h1>	
			</div>
			<!-- form untuk inputan data-->
			<form class="user" method="post" action="<?php echo base_url().'Mahasiswa/input'; ?>" >
				<div class="form-group">
					<input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Username Maximal 10 Character" required="true">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password Maximal 6 Character" required="true">
				</div>
				<div class="form-group">
					<input type="text" name="nama" class="form-control form-control-user" id="nama" placeholder="Full Name Maximal 30 Character" required="true">
				</div>
				<div class="form-group">
					<select id="grup" class="form-control" name="grup" required="true">
						<option value="0"> Pilih Grup User</option>
						<option value="1"> Admin</option>
						<option value="2"> User</option>
					</select>
				</div>
					<input type="submit" name="submit" class="btn btn-success btn-icon-split" value="Tambah" style="padding:5px">
			</form><hr>
			<div class="text-center">
				<a class="small" onclick="goBack()">Kembali</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function goBack(){
		window.history.back();
	}
</script>