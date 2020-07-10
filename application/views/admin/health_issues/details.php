<a  href="<?php echo site_url('admin/health_issues/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Health_issues'); ?></h5>
<!--Data display of health_issues with id--> 
<?php
	$c = $health_issues;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Animal</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Animal_model');
									   $dataArr = $this->CI->Animal_model->get_animal($c['animal_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>Issue</td><td><?php echo $c['issue']; ?></td></tr>

<tr><td>Treatment</td><td><?php echo $c['treatment']; ?></td></tr>

<tr><td>Issue Date</td><td><?php echo $c['issue_date']; ?></td></tr>

<tr><td>Status</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Status_model');
									   $dataArr = $this->CI->Status_model->get_status($c['status_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of health_issues with id//--> 