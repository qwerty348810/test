 <?php
 $screen=1;
if (isset($_GET['submitted']) && $_GET['submitted']==1 ) {
 $screen=3; 
if ( empty($_GET['name'])||empty($_GET['lname'])||empty($_GET['password'])||empty($_GET['nname'])||empty($_GET['email']) ) {
 $screen=2;
	}
	}
?>
<?php if ($screen==1) { ?>
<?php                    
		asort($day_b);
		foreach ($day_b as $k=>$v) {						
		echo '<option value="'.$k.'">'.$v.'</option>';}
		?>
<?php                    
		asort($month);
		foreach ($month as $k=>$v) {						
	    echo '<option value="'.$k.'">'.$v.'</option>';}
		?>
<?php                    
	   asort($year);
	   foreach ($year as $k=>$v) {						
	   echo '<option value="'.$k.'">'.$v.'</option>';}
	   ?>
<?php                    
	    asort($location);
	    foreach ($location as $k=>$v) {						
	    echo '<option value="'.$k.'">'.$v.'</option>';}
	    ?>
 <?php  } ?>  

