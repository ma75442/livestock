<a  href="<?php echo site_url('admin/feed_plans_animals/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Feed_plans_animals'); ?></h5>
<!--Data display of feed_plans_animals with id--> 
<?php
	$c = $feed_plans_animals;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Feed Plans</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Feed_plans_model');
									   $dataArr = $this->CI->Feed_plans_model->get_feed_plans($c['feed_plans_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>Animal</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Animal_model');
									   $dataArr = $this->CI->Animal_model->get_animal($c['animal_id']);
									   echo $dataArr['name'];?>
									</td></tr>


</table>
<!--End of Data display of feed_plans_animals with id//--> 