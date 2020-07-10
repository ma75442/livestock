<a  href="<?php echo site_url('admin/country/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Country'); ?></h5>
<!--Data display of country with id--> 
<?php
	$c = $country;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Sortname</td><td><?php echo $c['sortname']; ?></td></tr>

<tr><td>Name</td><td><?php echo $c['name']; ?></td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of country with id//--> 