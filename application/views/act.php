 
 <?php 
 @$act = $_GET['act'];
        if($act=='done'){
            echo '<font color="green">';
            echo 'ADD DATA SUCCESSFULLY';
            echo '</font>';
 }elseif($act=='update'){
 			echo '<font color="orange">';
            echo 'Update DATA SUCCESSFULLY';
            echo '</font>';

 }
 ?>