<?php $this->load->view('header.php');?>
		<div class="container-fluid-full">
		<div class="row-fluid">

		<?php $this->load->view('sidebar.php');?>
		
			<!-- start: Content -->
		<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-edit"></i>
					<a href="index.html">Edit Data Mahasiswa</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit data mahasiswa</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<?php 
					foreach ($data_siswa as $data){}
					
					$tanggal_lahir2 = explode("-", $data->tanggal_lahir);
					$tahun = $tanggal_lahir2[0];
					$bulan = $tanggal_lahir2[1];
					$tanggal = $tanggal_lahir2[2];
					$tanggal_lahir3 = $bulan."/".$tanggal."/".$tahun;
					?>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('siswa/update_data'); ?>" method="post">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Nama</label>
									<div class="controls">
										<input class="input-xlarge focused" id="focusedInput" type="text" name="nama" value="<?php echo $data->nama; ?>">
										<input type="hidden" name="id" value="<?php echo $data->id;?>">
									</div>
								</div>
								<div class="control-group hidden-phone">
									<label class="control-label">Alamat</label>
									<div class="controls">
										<textarea rows="3" style="width:30%" name="alamat"><?php echo $data->alamat; ?></textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Jenis Kelamin</label>
									<div class="controls">
									<?php
									if ($data->jenis_kelamin == "L"){
									?>
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="L" checked>Laki-Laki
										</label>
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="P">Perempuan
										</label>
									<?php
									}
									else if ($data->jenis_kelamin == "P"){
									?>
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="L">Laki-Laki
										</label>
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="P" checked>Perempuan
										</label>
									<?php
									}
									?>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="date01">Tanggal Lahir</label>
									<div class="controls">
										<input type="text" class="input-xlarge datepicker" id="date01" name="tanggal_lahir" placeholder="pilih tanggal" value="<?php echo $tanggal_lahir3; ?>">
									</div>
								</div>
								<div class="form-actions">
									<input type="submit" class="btn btn-primary" name="tombol" id="tombol" value="Update">
									<a href="<?php echo base_url('siswa');?>" class="btn btn-danger">Kembali</a>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			
		</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

<?php $this->load->view('footer.php');?>