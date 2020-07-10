<a  href="<?php echo site_url('admin/health_issues/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Health_issues'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/health_issues/save/'.$health_issues['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
   <div class="card-body">    
        <div class="form-group"> 
                                    <label for="Animal" class="col-md-4 control-label">Animal</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Animal_model'); 
             $dataArr = $this->CI->Animal_model->get_all_animal(); 
          ?> 
          <select name="animal_id"  id="animal_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($health_issues['animal_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Issue" class="col-md-4 control-label">Issue</label> 
          <div class="col-md-8"> 
           <input type="text" name="issue" value="<?php echo ($this->input->post('issue') ? $this->input->post('issue') : $health_issues['issue']); ?>" class="form-control" id="issue" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Treatment" class="col-md-4 control-label">Treatment</label> 
          <div class="col-md-8"> 
           <input type="text" name="treatment" value="<?php echo ($this->input->post('treatment') ? $this->input->post('treatment') : $health_issues['treatment']); ?>" class="form-control" id="treatment" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Issue Date" class="col-md-4 control-label">Issue Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="issue_date"  id="issue_date"  value="<?php echo ($this->input->post('issue_date') ? $this->input->post('issue_date') : $health_issues['issue_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
                                    <label for="Status" class="col-md-4 control-label">Status</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Status_model'); 
             $dataArr = $this->CI->Status_model->get_all_status(); 
          ?> 
          <select name="status_id"  id="status_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($health_issues['status_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
                                       <label for="Created" class="col-md-4 control-label">Created</label> 
          <div class="col-md-8"> 
           <input type="text" name="created"  id="created"  value="<?php echo ($this->input->post('created') ? $this->input->post('created') : $health_issues['created']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Modified" class="col-md-4 control-label">Modified</label> 
          <div class="col-md-8"> 
           <input type="text" name="modified"  id="modified"  value="<?php echo ($this->input->post('modified') ? $this->input->post('modified') : $health_issues['modified']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($health_issues['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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