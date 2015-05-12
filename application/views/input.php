<?php $this->load->view('header.php');?>
		<div class="container-fluid-full">
		<div class="row-fluid">

		<?php $this->load->view('sidebar.php');?>
		
			<!-- start: Content -->
		<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-edit"></i>
					<a href="index.html">Input Data Mahasiswa</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Input data mahasiswa</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('siswa/input'); ?>" method="post">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Nama</label>
									<div class="controls">
										<input class="input-xlarge focused" id="focusedInput" type="text" name="nama">
									</div>
								</div>
								<div class="control-group hidden-phone">
									<label class="control-label">Alamat</label>
									<div class="controls">
										<textarea rows="3" style="width:30%" name="alamat"></textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Jenis Kelamin</label>
									<div class="controls">
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="L">Laki-Laki
										</label>
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="P">Perempuan
										</label>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="date01">Tanggal Lahir</label>
									<div class="controls">
										<input type="text" class="input-xlarge datepicker" id="date01" name="tanggal_lahir" placeholder="pilih tanggal">
									</div>
								</div>
								<div class="form-actions">
									<input type="submit" class="btn btn-primary" name="tombol" id="tombol" value="Simpan">
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