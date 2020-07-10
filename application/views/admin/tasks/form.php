<a  href="<?php echo site_url('admin/tasks/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Tasks'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/tasks/save/'.$tasks['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
   <div class="card-body">    
        <div class="form-group"> 
          <label for="Name" class="col-md-4 control-label">Name</label> 
          <div class="col-md-8"> 
           <input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $tasks['name']); ?>" class="form-control" id="name" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Short Desc" class="col-md-4 control-label">Short Desc</label> 
          <div class="col-md-8"> 
           <input type="text" name="short_desc" value="<?php echo ($this->input->post('short_desc') ? $this->input->post('short_desc') : $tasks['short_desc']); ?>" class="form-control" id="short_desc" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Long Desc" class="col-md-4 control-label">Long Desc</label> 
          <div class="col-md-8"> 
           <input type="text" name="long_desc" value="<?php echo ($this->input->post('long_desc') ? $this->input->post('long_desc') : $tasks['long_desc']); ?>" class="form-control" id="long_desc" /> 
          </div> 
           </div>
<div class="form-group"> 
                                    <label for="Users" class="col-md-4 control-label">Users</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Users_model'); 
             $dataArr = $this->CI->Users_model->get_all_users(); 
          ?> 
          <select name="users_id"  id="users_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($tasks['users_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['email']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
                                       <label for="Scheduled Date" class="col-md-4 control-label">Scheduled Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="scheduled_date"  id="scheduled_date"  value="<?php echo ($this->input->post('scheduled_date') ? $this->input->post('scheduled_date') : $tasks['scheduled_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
                                       <label for="Created" class="col-md-4 control-label">Created</label> 
          <div class="col-md-8"> 
           <input type="text" name="created"  id="created"  value="<?php echo ($this->input->post('created') ? $this->input->post('created') : $tasks['created']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Modified" class="col-md-4 control-label">Modified</label> 
          <div class="col-md-8"> 
           <input type="text" name="modified"  id="modified"  value="<?php echo ($this->input->post('modified') ? $this->input->post('modified') : $tasks['modified']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($tasks['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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