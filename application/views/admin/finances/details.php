<a  href="<?php echo site_url('admin/finances/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Finances'); ?></h5>
<!--Data display of finances with id--> 
<?php
	$c = $finances;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Users</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td></tr>

<tr><td>Date</td><td><?php echo $c['date']; ?></td></tr>

<tr><td>Type</td><td><?php echo $c['type']; ?></td></tr>

<tr><td>Amount</td><td><?php echo $c['amount']; ?></td></tr>

<tr><td>Comments</td><td><?php echo $c['comments']; ?></td></tr>

<tr><td>Credit Debit</td><td><?php echo $c['credit_debit']; ?></td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of finances with id//--> 