<a  href="<?php echo site_url('admin/addresses/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Addresses'); ?></h5>
<!--Data display of addresses with id--> 
<?php
	$c = $addresses;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Users</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td></tr>

<tr><td>Address1</td><td><?php echo $c['address1']; ?></td></tr>

<tr><td>Address2</td><td><?php echo $c['address2']; ?></td></tr>

<tr><td>Address3</td><td><?php echo $c['address3']; ?></td></tr>

<tr><td>City</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('City_model');
									   $dataArr = $this->CI->City_model->get_city($c['city_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>City Other</td><td><?php echo $c['city_other']; ?></td></tr>

<tr><td>State</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('State_model');
									   $dataArr = $this->CI->State_model->get_state($c['state_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>State Other</td><td><?php echo $c['state_other']; ?></td></tr>

<tr><td>Country</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Country_model');
									   $dataArr = $this->CI->Country_model->get_country($c['country_id']);
									   echo $dataArr['sortname'];?>
									</td></tr>

<tr><td>Zip</td><td><?php echo $c['zip']; ?></td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of addresses with id//--> 