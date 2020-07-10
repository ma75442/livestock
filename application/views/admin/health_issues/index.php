<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Health_issues'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/health_issues/save'); ?>"
			class="btn btn-success">Add</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Export <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/health_issues/export'); ?>/'+this.value">
			<option>Select..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/health_issues/search/',array("class"=>"form-horizontal")); ?>
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
   
<!--Data display of health_issues-->       
<table class="table table-striped table-bordered">
    <tr>
		<th>Animal</th>
		<th>Animal id</th>
<th>Issue</th>
<th>Treatment</th>
<th>Issue Date</th>
<th>Status</th>
<th>Created</th>
<th>Modified</th>

		<th>Actions</th>
    </tr>
	<?php foreach($health_issues as $c){ ?>
    <tr>
		<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Animal_model');
									   $dataArr = $this->CI->Animal_model->get_animal($c['animal_id']);
									   echo $dataArr['name'];?>
									</td>
									<td><?php echo $c['animal_id']; ?></td>
<td><?php echo $c['issue']; ?></td>
<td><?php echo $c['treatment']; ?></td>
<td><?php echo $c['issue_date']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Status_model');
									   $dataArr = $this->CI->Status_model->get_status($c['status_id']);
									   echo $dataArr['name'];?>
									</td>
<td><?php echo $c['created']; ?></td>
<td><?php echo $c['modified']; ?></td>

		<td>
            <a href="<?php echo site_url('admin/health_issues/details/'.$c['id']); ?>"  class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
            <a href="<?php echo site_url('admin/health_issues/save/'.$c['id']); ?>" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
            <a href="<?php echo site_url('admin/health_issues/remove/'.$c['id']); ?>" onClick="return confirm('Are you sure to delete this item?');" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
        </td>
    </tr>
	<?php } ?>
</table>
<!--End of Data display of health_issues//--> 

<!--No data-->
<?php
	if(count($health_issues)==0){
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
