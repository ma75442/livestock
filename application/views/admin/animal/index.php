<h5 class="font-20 mt-15 mb-1">Invidual <?php echo str_replace('_',' ','Animal'); ?> Details</h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/animal/save'); ?>"
			class="btn btn-success">Add</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Export <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/animal/export'); ?>/'+this.value">
			<option>Select..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/animal/search/',array("class"=>"form-horizontal")); ?>
                    <input name="key" type="text"
				value="<?php echo isset($key)?$key:'';?>" placeholder="Search..."
				class="form-control">
				<button type="submit" class="mr-0">
					<i class="fa fa-search"></i>
				</button>
                <?php echo form_close(); ?>
            </li>
		</ul>
	</div>
</div>
<!--End of Action//--> 
   
<!--Data display of animal-->       
<table class="table table-striped table-bordered">
    <tr>
		<th>Users</th>
<th>Name</th>
<th>Short Desc</th>
<th>Long Desc</th>
<th>Ear Tag</th>
<th>Reg</th>
<th>Birth Date</th>
<th>Sex</th>
<th>Breed</th>
<th>Blood Line</th>
<th>Color</th>
<th>Weight</th>
<th>Weight Type</th>
<th>Birth Weight</th>
<th>Birth Weight Type</th>
<th>Horn Status</th>
<th>Fathers</th>
<th>Father Other</th>
<th>Mothers</th>
<th>Mother Other</th>
<th>Breeder</th>
<th>Owner</th>
<th>Herd</th>
<th>Tracking Device</th>
<th>How Acquired</th>
<th>How Acquired Date</th>
<th>How Disposed</th>
<th>How Disposed Date</th>
<th>Deactive</th>
<th>Deactive Reason</th>
<th>Type</th>
<th>Subtypes</th>
<th>Comments</th>
<th>Created</th>
<th>Modified</th>

		<th>Actions</th>
    </tr>
	<?php foreach($animal as $c){ ?>
    <tr>
		<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td>
<td><?php echo $c['name']; ?></td>
<td><?php echo $c['short_desc']; ?></td>
<td><?php echo $c['long_desc']; ?></td>
<td><?php echo $c['ear_tag']; ?></td>
<td><?php echo $c['reg']; ?></td>
<td><?php echo $c['birth_date']; ?></td>
<td><?php echo $c['sex']; ?></td>
<td><?php echo $c['breed']; ?></td>
<td><?php echo $c['blood_line']; ?></td>
<td><?php echo $c['color']; ?></td>
<td><?php echo $c['weight']; ?></td>
<td><?php echo $c['weight_type']; ?></td>
<td><?php echo $c['birth_weight']; ?></td>
<td><?php echo $c['birth_weight_type']; ?></td>
<td><?php echo $c['horn_status']; ?></td>
<td><?php echo $c['fathers']; ?></td>
<td><?php echo $c['father_other']; ?></td>
<td><?php echo $c['mothers']; ?></td>
<td><?php echo $c['mother_other']; ?></td>
<td><?php echo $c['breeder']; ?></td>
<td><?php echo $c['owner']; ?></td>
<td><?php echo $c['herd']; ?></td>
<td><?php echo $c['tracking_device']; ?></td>
<td><?php echo $c['how_acquired']; ?></td>
<td><?php echo $c['how_acquired_date']; ?></td>
<td><?php echo $c['how_disposed']; ?></td>
<td><?php echo $c['how_disposed_date']; ?></td>
<td><?php echo $c['deactive']; ?></td>
<td><?php echo $c['deactive_reason']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Type_model');
									   $dataArr = $this->CI->Type_model->get_type($c['type_id']);
									   echo $dataArr['name'];?>
									</td>
<td><?php echo $c['subtypes']; ?></td>
<td><?php echo $c['comments']; ?></td>
<td><?php echo $c['created']; ?></td>
<td><?php echo $c['modified']; ?></td>

		<td>
            <a href="<?php echo site_url('admin/animal/details/'.$c['id']); ?>"  class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
            <a href="<?php echo site_url('admin/animal/save/'.$c['id']); ?>" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
            <a href="<?php echo site_url('admin/animal/remove/'.$c['id']); ?>" onClick="return confirm('Are you sure to delete this item?');" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
        </td>
    </tr>
	<?php } ?>
</table>
<!--End of Data display of animal//--> 

<!--No data-->
<?php
	if(count($animal)==0){
?>
 <div align="center"><h3>Data is not exists</h3></div>
<?php
	}
?>
<!--End of No data//-->

<!--Pagination-->
<?php
	echo $link;
?>
<!--End of Pagination//-->
