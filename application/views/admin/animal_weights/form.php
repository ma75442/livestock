<a  href="<?php echo site_url('admin/animal_weights/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Animal_weights'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/animal_weights/save/'.$animal_weights['id'],array("class"=>"form-horizontal")); ?>
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
            <option value="<?=$dataArr[$i]['id']?>" <?php if($animal_weights['animal_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
                                       <label for="Weight Date" class="col-md-4 control-label">Weight Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="weight_date"  id="weight_date"  value="<?php echo ($this->input->post('weight_date') ? $this->input->post('weight_date') : $animal_weights['weight_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
          <label for="Value" class="col-md-4 control-label">Value</label> 
          <div class="col-md-8"> 
           <input type="text" name="value" value="<?php echo ($this->input->post('value') ? $this->input->post('value') : $animal_weights['value']); ?>" class="form-control" id="value" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Value Type" class="col-md-4 control-label">Value Type</label> 
          <div class="col-md-8"> 
           <input type="text" name="value_type" value="<?php echo ($this->input->post('value_type') ? $this->input->post('value_type') : $animal_weights['value_type']); ?>" class="form-control" id="value_type" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Comments" class="col-md-4 control-label">Comments</label> 
          <div class="col-md-8"> 
           <input type="text" name="comments" value="<?php echo ($this->input->post('comments') ? $this->input->post('comments') : $animal_weights['comments']); ?>" class="form-control" id="comments" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Created" class="col-md-4 control-label">Created</label> 
          <div class="col-md-8"> 
           <input type="text" name="created"  id="created"  value="<?php echo ($this->input->post('created') ? $this->input->post('created') : $animal_weights['created']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Modified" class="col-md-4 control-label">Modified</label> 
          <div class="col-md-8"> 
           <input type="text" name="modified"  id="modified"  value="<?php echo ($this->input->post('modified') ? $this->input->post('modified') : $animal_weights['modified']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($animal_weights['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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