<h2>input data</h2>
<?php echo form_open('siswa/input') ?>
<table>
	<tr><td>
<?php 
echo "Nama  </td><td> : </td><td>".form_input('nama')."</td></tr>";
echo "<tr><td>Alamat </td><td> : </td><td>".form_input('alamat')."</td></tr>";
echo "<tr><td>Jenis Kelamin </td><td> : </td><td>".form_radio('jenis_kelamin','L')."Laki-laki</td></tr>";
echo "<tr><td></td><td></td><td>".form_radio('jenis_kelamin','P')."Perempuan</td></tr>";
echo "<tr><td>Tanggal lahir </td><td> : </td><td>".form_input('tanggal_lahir')."</td></tr>";
echo "<tr><td></td><td></td><td align='right'>".form_submit('tombol','Input')."</td></tr></table>";
echo form_close();

if (!$tombol) {} 
else 
{
	echo "Nama : $nama <br />";
	echo "Alamat : $alamat <br />";
	echo "Jenis Kelamin : $jenis_kelamin <br />";
	echo "Tanggal lahir : $tanggal_lahir <br />";
}
?>