<a  href="<?php echo site_url('admin/animal_weights/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Animal_weights'); ?></h5>
<!--Data display of animal_weights with id--> 
<?php
	$c = $animal_weights;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Animal</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Animal_model');
									   $dataArr = $this->CI->Animal_model->get_animal($c['animal_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>Weight Date</td><td><?php echo $c['weight_date']; ?></td></tr>

<tr><td>Value</td><td><?php echo $c['value']; ?></td></tr>

<tr><td>Value Type</td><td><?php echo $c['value_type']; ?></td></tr>

<tr><td>Comments</td><td><?php echo $c['comments']; ?></td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of animal_weights with id//--> 