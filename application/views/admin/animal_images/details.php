<a  href="<?php echo site_url('admin/animal_images/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Animal_images'); ?></h5>
<!--Data display of animal_images with id--> 
<?php
	$c = $animal_images;
?> 
<table class="table table-striped table-bordered">         
		<tr><td>Animal</td><td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Animal_model');
									   $dataArr = $this->CI->Animal_model->get_animal($c['animal_id']);
									   echo $dataArr['name'];?>
									</td></tr>

<tr><td>Name</td><td><?php echo $c['name']; ?></td></tr>

<tr><td>File Picture</td><td><?php
											if(is_file(APPPATH.'../public/'.$c['file_picture'])&&file_exists(APPPATH.'../public/'.$c['file_picture']))
											{
										 ?>
										  <img src="<?php echo base_url().'public/'.$c['file_picture']?>" class="picture_50x50">
										  <?php
											}
											else
											{
										?>
										<img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
										<?php		
											}
										  ?>	
										</td></tr>

<tr><td>Created</td><td><?php echo $c['created']; ?></td></tr>

<tr><td>Modified</td><td><?php echo $c['modified']; ?></td></tr>


</table>
<!--End of Data display of animal_images with id//--> 