<a  href="<?php echo site_url('admin/phinxlog/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Phinxlog'); ?></h5>
<!--Data display of phinxlog with id--> 
<?php
	$c = $phinxlog;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Version</td><td><?php echo $c['version']; ?></td></tr>

<tr><td>Start Time</td><td><?php echo $c['start_time']; ?></td></tr>

<tr><td>End Time</td><td><?php echo $c['end_time']; ?></td></tr>


</table>
<!--End of Data display of phinxlog with id//--> 