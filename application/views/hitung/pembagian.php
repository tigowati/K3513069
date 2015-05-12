<h1>pembagian!</h1>
<p>Silakan masukan data berikut!!</p>
<?php echo form_open('index/submenu/hitung/pembagian');?>
<?php echo form_input('v1',$v1);?> /
<?php echo form_input('v2',$v2);?><br>
<?php echo form_submit('submit','Hitung!!');?>
<?php echo form_close();?><br>
<?php
 if(!($submit)){}else
echo "Hasil : $hasil";?>
<p>