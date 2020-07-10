<a  href="<?php echo site_url('admin/feeds/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Feeds'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/feeds/save/'.$feeds['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
   <div class="card-body">    
        <div class="form-group"> 
                                    <label for="Feed Plans" class="col-md-4 control-label">Feed Plans</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Feed_plans_model'); 
             $dataArr = $this->CI->Feed_plans_model->get_all_feed_plans(); 
          ?> 
          <select name="feed_plans_id"  id="feed_plans_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($feeds['feed_plans_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Type" class="col-md-4 control-label">Type</label> 
          <div class="col-md-8"> 
           <input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $feeds['type']); ?>" class="form-control" id="type" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Apply Every" class="col-md-4 control-label">Apply Every</label> 
          <div class="col-md-8"> 
           <input type="text" name="apply_every" value="<?php echo ($this->input->post('apply_every') ? $this->input->post('apply_every') : $feeds['apply_every']); ?>" class="form-control" id="apply_every" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Quantity" class="col-md-4 control-label">Quantity</label> 
          <div class="col-md-8"> 
           <input type="text" name="quantity" value="<?php echo ($this->input->post('quantity') ? $this->input->post('quantity') : $feeds['quantity']); ?>" class="form-control" id="quantity" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Units" class="col-md-4 control-label">Units</label> 
          <div class="col-md-8"> 
           <input type="text" name="units" value="<?php echo ($this->input->post('units') ? $this->input->post('units') : $feeds['units']); ?>" class="form-control" id="units" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Cost" class="col-md-4 control-label">Cost</label> 
          <div class="col-md-8"> 
           <input type="text" name="cost" value="<?php echo ($this->input->post('cost') ? $this->input->post('cost') : $feeds['cost']); ?>" class="form-control" id="cost" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Feeding Notes" class="col-md-4 control-label">Feeding Notes</label> 
          <div class="col-md-8"> 
           <input type="text" name="feeding_notes" value="<?php echo ($this->input->post('feeding_notes') ? $this->input->post('feeding_notes') : $feeds['feeding_notes']); ?>" class="form-control" id="feeding_notes" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Created" class="col-md-4 control-label">Created</label> 
          <div class="col-md-8"> 
           <input type="text" name="created"  id="created"  value="<?php echo ($this->input->post('created') ? $this->input->post('created') : $feeds['created']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Modified" class="col-md-4 control-label">Modified</label> 
          <div class="col-md-8"> 
           <input type="text" name="modified"  id="modified"  value="<?php echo ($this->input->post('modified') ? $this->input->post('modified') : $feeds['modified']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($feeds['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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