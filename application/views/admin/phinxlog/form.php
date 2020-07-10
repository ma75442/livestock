<a  href="<?php echo site_url('admin/phinxlog/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Phinxlog'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/phinxlog/save/'.$phinxlog['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
   <div class="card-body">    
        <div class="form-group"> 
          <label for="Version" class="col-md-4 control-label">Version</label> 
          <div class="col-md-8"> 
           <input type="text" name="version" value="<?php echo ($this->input->post('version') ? $this->input->post('version') : $phinxlog['version']); ?>" class="form-control" id="version" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Start Time" class="col-md-4 control-label">Start Time</label> 
          <div class="col-md-8"> 
           <input type="text" name="start_time" value="<?php echo ($this->input->post('start_time') ? $this->input->post('start_time') : $phinxlog['start_time']); ?>" class="form-control" id="start_time" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="End Time" class="col-md-4 control-label">End Time</label> 
          <div class="col-md-8"> 
           <input type="text" name="end_time" value="<?php echo ($this->input->post('end_time') ? $this->input->post('end_time') : $phinxlog['end_time']); ?>" class="form-control" id="end_time" /> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($phinxlog['id'])){?>Save<?php }else{?>Update<?php } ?></button>
    </div>
</div>
<?php echo form_close(); ?>
<!--End of Form to save data//-->	
<!--JQuery-->
<script>
	$( ".datepicker" ).datepicker({
		dateFormat: "yy-mm-dd", 
		changeYear: true,
		changeMonth: true,
		showOn: 'button',
		buttonText: 'Show Date',
		buttonImageOnly: true,
		buttonImage: '<?php echo base_url(); ?>public/datepicker/images/calendar.gif',
	});
</script>  			