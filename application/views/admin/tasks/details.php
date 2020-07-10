<a  href="<?php echo site_url('admin/tasks/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Tasks'); ?></h5>
<!--Data display of tasks with id--> 
<?php
	$c = $tasks;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Name</td><td><?php echo $c['name']; ?></td></tr>

<tr><td>Short Desc</td><td><?php echo $c['short_desc']; ?></td></tr>

<tr><td>Long Desc</td><td><?php echo $c['long_desc']; ?></td></tr>

<tr><td>Users</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td></tr>

<tr><td>Scheduled Date</td><td><?php echo $c['scheduled_date']; ?></td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of tasks with id//--> 