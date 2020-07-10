<a  href="<?php echo site_url('admin/animal/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Animal'); ?></h5>
<!--Data display of animal with id--> 
<?php
	$c = $animal;
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

<tr><td>Short Desc</td><td><?php echo $c['short_desc']; ?></td></tr>

<tr><td>Long Desc</td><td><?php echo $c['long_desc']; ?></td></tr>

<tr><td>Ear Tag</td><td><?php echo $c['ear_tag']; ?></td></tr>

<tr><td>Reg</td><td><?php echo $c['reg']; ?></td></tr>

<tr><td>Birth Date</td><td><?php echo $c['birth_date']; ?></td></tr>

<tr><td>Sex</td><td><?php echo $c['sex']; ?></td></tr>

<tr><td>Breed</td><td><?php echo $c['breed']; ?></td></tr>

<tr><td>Blood Line</td><td><?php echo $c['blood_line']; ?></td></tr>

<tr><td>Color</td><td><?php echo $c['color']; ?></td></tr>

<tr><td>Weight</td><td><?php echo $c['weight']; ?></td></tr>

<tr><td>Weight Type</td><td><?php echo $c['weight_type']; ?></td></tr>

<tr><td>Birth Weight</td><td><?php echo $c['birth_weight']; ?></td></tr>

<tr><td>Birth Weight Type</td><td><?php echo $c['birth_weight_type']; ?></td></tr>

<tr><td>Horn Status</td><td><?php echo $c['horn_status']; ?></td></tr>

<tr><td>Fathers</td><td><?php echo $c['fathers']; ?></td></tr>

<tr><td>Father Other</td><td><?php echo $c['father_other']; ?></td></tr>

<tr><td>Mothers</td><td><?php echo $c['mothers']; ?></td></tr>

<tr><td>Mother Other</td><td><?php echo $c['mother_other']; ?></td></tr>

<tr><td>Breeder</td><td><?php echo $c['breeder']; ?></td></tr>

<tr><td>Owner</td><td><?php echo $c['owner']; ?></td></tr>

<tr><td>Herd</td><td><?php echo $c['herd']; ?></td></tr>

<tr><td>Tracking Device</td><td><?php echo $c['tracking_device']; ?></td></tr>

<tr><td>How Acquired</td><td><?php echo $c['how_acquired']; ?></td></tr>

<tr><td>How Acquired Date</td><td><?php echo $c['how_acquired_date']; ?></td></tr>

<tr><td>How Disposed</td><td><?php echo $c['how_disposed']; ?></td></tr>

<tr><td>How Disposed Date</td><td><?php echo $c['how_disposed_date']; ?></td></tr>

<tr><td>Deactive</td><td><?php echo $c['deactive']; ?></td></tr>

<tr><td>Deactive Reason</td><td><?php echo $c['deactive_reason']; ?></td></tr>

<tr><td>Type</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Type_model');
									   $dataArr = $this->CI->Type_model->get_type($c['type_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>Subtypes</td><td><?php echo $c['subtypes']; ?></td></tr>

<tr><td>Comments</td><td><?php echo $c['comments']; ?></td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of animal with id//--> 