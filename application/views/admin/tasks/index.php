<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Tasks'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/tasks/save'); ?>"
			class="btn btn-success">Add</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Export <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/tasks/export'); ?>/'+this.value">
			<option>Select..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/tasks/search/',array("class"=>"form-horizontal")); ?>
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
   
<!--Data display of tasks-->       
<table class="table table-striped table-bordered">
    <tr>
		<th>Name</th>
<th>Short Desc</th>
<th>Long Desc</th>
<th>Users</th>
<th>Scheduled Date</th>
<th>Created</th>
<th>Modified</th>

		<th>Actions</th>
    </tr>
	<?php foreach($tasks as $c){ ?>
    <tr>
		<td><?php echo $c['name']; ?></td>
<td><?php echo $c['short_desc']; ?></td>
<td><?php echo $c['long_desc']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td>
<td><?php echo $c['scheduled_date']; ?></td>
<td><?php echo $c['created']; ?></td>
<td><?php echo $c['modified']; ?></td>

		<td>
            <a href="<?php echo site_url('admin/tasks/details/'.$c['id']); ?>"  class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
            <a href="<?php echo site_url('admin/tasks/save/'.$c['id']); ?>" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
            <a href="<?php echo site_url('admin/tasks/remove/'.$c['id']); ?>" onClick="return confirm('Are you sure to delete this item?');" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
        </td>
    </tr>
	<?php } ?>
</table>
<!--End of Data display of tasks//--> 

<!--No data-->
<?php
	if(count($tasks)==0){
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
