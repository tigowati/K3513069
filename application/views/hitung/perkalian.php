<?php 
 if(!($submit)){
 ?>
 <h1>Perkalian!</h1>
 <p>Silakan masukan data berikut!!</p>
 <?php echo form_open('index/submenu/hitung/perkalian');?>
 <?php echo form_input('v1',$v1);?> x
 <?php echo form_input('v2',$v2);?><br>
  <?php echo form_radio('r1',$r1);?><br>
   <?php echo form_checkbox('c1',$c1);?><br>
    <?php echo form_password('p1',$p1);?><br>
	 <?php echo form_textarea('t1',$t1);?><br>
	
 <?php echo form_submit('submit','Hitung!!');?>
 <?php echo form_close();?><br>
 <?php
 }else
 echo "Hasil : $hasil";
 ?>
