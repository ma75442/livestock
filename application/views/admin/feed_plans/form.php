<a  href="<?php echo site_url('admin/feed_plans/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Feed_plans'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/feed_plans/save/'.$feed_plans['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
   <div class="card-body">    
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
            <option value="<?=$dataArr[$i]['id']?>" <?php if($feed_plans['users_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['email']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Name" class="col-md-4 control-label">Name</label> 
          <div class="col-md-8"> 
           <input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $feed_plans['name']); ?>" class="form-control" id="name" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="From Date" class="col-md-4 control-label">From Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="from_date"  id="from_date"  value="<?php echo ($this->input->post('from_date') ? $this->input->post('from_date') : $feed_plans['from_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
                                       <label for="To Date" class="col-md-4 control-label">To Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="to_date"  id="to_date"  value="<?php echo ($this->input->post('to_date') ? $this->input->post('to_date') : $feed_plans['to_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
          <label for="Cost" class="col-md-4 control-label">Cost</label> 
          <div class="col-md-8"> 
           <input type="text" name="cost" value="<?php echo ($this->input->post('cost') ? $this->input->post('cost') : $feed_plans['cost']); ?>" class="form-control" id="cost" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Animal Count" class="col-md-4 control-label">Animal Count</label> 
          <div class="col-md-8"> 
           <input type="text" name="animal_count" value="<?php echo ($this->input->post('animal_count') ? $this->input->post('animal_count') : $feed_plans['animal_count']); ?>" class="form-control" id="animal_count" /> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($feed_plans['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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