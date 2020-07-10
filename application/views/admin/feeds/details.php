<a  href="<?php echo site_url('admin/feeds/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Feeds'); ?></h5>
<!--Data display of feeds with id--> 
<?php
	$c = $feeds;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Feed Plans</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Feed_plans_model');
									   $dataArr = $this->CI->Feed_plans_model->get_feed_plans($c['feed_plans_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>Type</td><td><?php echo $c['type']; ?></td></tr>

<tr><td>Apply Every</td><td><?php echo $c['apply_every']; ?></td></tr>

<tr><td>Quantity</td><td><?php echo $c['quantity']; ?></td></tr>

<tr><td>Units</td><td><?php echo $c['units']; ?></td></tr>

<tr><td>Cost</td><td><?php echo $c['cost']; ?></td></tr>

<tr><td>Feeding Notes</td><td><?php echo $c['feeding_notes']; ?></td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of feeds with id//--> 