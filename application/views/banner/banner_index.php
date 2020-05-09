 <?php 
 foreach ($rsbanner as $data) { ?>
   <p>
  <img src="<?php echo base_url('banners/' .$data->bn_file);?>" width="100%">
   </p> 
  <?php }  ?>