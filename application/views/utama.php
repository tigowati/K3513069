<?php $this->load->view('header.php');?>
		<div class="container-fluid-full">
		<div class="row-fluid">

		<?php $this->load->view('sidebar.php');?>
		
			<!-- start: Content -->
		<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-tasks"></i>
					<a href="index.html">Database Mahasiswa</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon tasks"></i><span class="break"></span>Database</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Tangal Lahir</th>
									<th>Action</th>
								</tr>
							</thead>   
							<tbody>
								<?php
								$no = 1;
								foreach ($hasil as $data) {
								?>
								<tr>
									<td style="width:5%"><?php echo $no++ ;?></td>
									<td><?php echo $data->nama;?></td>
									<td><?php echo $data->alamat;?></td>
									<td style="width:12%"><?php echo $data->jenis_kelamin;?></td>
									<td><?php echo $data->tanggal_lahir;?></td>
									<td style="width:10%">
										<a class="btn btn-success" href="<?php echo base_url('siswa/edit_data/'.$data->id); ?>"><i class="halflings-icon white edit"></i></a>
										<a class="btn btn-danger" <?php echo 'onclick="javascript:conf_del('.$data->id.')">'; ?><i class="halflings-icon white trash"></i></a>
									</td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
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
	
	<script>
	function conf_del(id){
		var r = confirm("Apakah anda yakin akan menghapusnya ?");
		if(r) window.location.href = "<?php echo base_url('siswa/process?act=pengumuman&do=delete&id='); ?>" + id;
	}
	</script>

<?php $this->load->view('footer.php');?>