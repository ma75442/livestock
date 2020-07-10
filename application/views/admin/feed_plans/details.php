<a  href="<?php echo site_url('admin/feed_plans/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Feed_plans'); ?></h5>
<!--Data display of feed_plans with id--> 
<?php
	$c = $feed_plans;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Users</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td></tr>

<tr><td>Name</td><td><?php echo $c['name']; ?></td></tr>

<tr><td>From Date</td><td><?php echo $c['from_date']; ?></td></tr>

<tr><td>To Date</td><td><?php echo $c['to_date']; ?></td></tr>

<tr><td>Cost</td><td><?php echo $c['cost']; ?></td></tr>

<tr><td>Animal Count</td><td><?php echo $c['animal_count']; ?></td></tr>


</table>
<!--End of Data display of feed_plans with id//--> 