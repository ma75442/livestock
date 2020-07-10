<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Phinxlog'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/phinxlog/save'); ?>"
			class="btn btn-success">Add</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Export <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/phinxlog/export'); ?>/'+this.value">
			<option>Select..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/phinxlog/search/',array("class"=>"form-horizontal")); ?>
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
   
<!--Data display of phinxlog-->       
<table class="table table-striped table-bordered">
    <tr>
		<th>Version</th>
<th>Start Time</th>
<th>End Time</th>

		<th>Actions</th>
    </tr>
	<?php foreach($phinxlog as $c){ ?>
    <tr>
		<td><?php echo $c['version']; ?></td>
<td><?php echo $c['start_time']; ?></td>
<td><?php echo $c['end_time']; ?></td>

		<td>
            <a href="<?php echo site_url('admin/phinxlog/details/'.$c['id']); ?>"  class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
            <a href="<?php echo site_url('admin/phinxlog/save/'.$c['id']); ?>" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
            <a href="<?php echo site_url('admin/phinxlog/remove/'.$c['id']); ?>" onClick="return confirm('Are you sure to delete this item?');" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
        </td>
    </tr>
	<?php } ?>
</table>
<!--End of Data display of phinxlog//--> 

<!--No data-->
<?php
	if(count($phinxlog)==0){
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
