<a  href="<?php echo site_url('admin/animal/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Animal'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/animal/save/'.$animal['id'],array("class"=>"form-horizontal")); ?>
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
            <option value="<?=$dataArr[$i]['id']?>" <?php if($animal['users_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['email']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Name" class="col-md-4 control-label">Name</label> 
          <div class="col-md-8"> 
           <input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $animal['name']); ?>" class="form-control" id="name" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Short Desc" class="col-md-4 control-label">Short Desc</label> 
          <div class="col-md-8"> 
           <input type="text" name="short_desc" value="<?php echo ($this->input->post('short_desc') ? $this->input->post('short_desc') : $animal['short_desc']); ?>" class="form-control" id="short_desc" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Long Desc" class="col-md-4 control-label">Long Desc</label> 
          <div class="col-md-8"> 
           <input type="text" name="long_desc" value="<?php echo ($this->input->post('long_desc') ? $this->input->post('long_desc') : $animal['long_desc']); ?>" class="form-control" id="long_desc" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Ear Tag" class="col-md-4 control-label">Ear Tag</label> 
          <div class="col-md-8"> 
           <input type="text" name="ear_tag" value="<?php echo ($this->input->post('ear_tag') ? $this->input->post('ear_tag') : $animal['ear_tag']); ?>" class="form-control" id="ear_tag" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Reg" class="col-md-4 control-label">Reg</label> 
          <div class="col-md-8"> 
           <input type="text" name="reg" value="<?php echo ($this->input->post('reg') ? $this->input->post('reg') : $animal['reg']); ?>" class="form-control" id="reg" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Birth Date" class="col-md-4 control-label">Birth Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="birth_date"  id="birth_date"  value="<?php echo ($this->input->post('birth_date') ? $this->input->post('birth_date') : $animal['birth_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
          <label for="Sex" class="col-md-4 control-label">Sex</label> 
          <div class="col-md-8"> 
           <input type="text" name="sex" value="<?php echo ($this->input->post('sex') ? $this->input->post('sex') : $animal['sex']); ?>" class="form-control" id="sex" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Breed" class="col-md-4 control-label">Breed</label> 
          <div class="col-md-8"> 
           <input type="text" name="breed" value="<?php echo ($this->input->post('breed') ? $this->input->post('breed') : $animal['breed']); ?>" class="form-control" id="breed" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Blood Line" class="col-md-4 control-label">Blood Line</label> 
          <div class="col-md-8"> 
           <input type="text" name="blood_line" value="<?php echo ($this->input->post('blood_line') ? $this->input->post('blood_line') : $animal['blood_line']); ?>" class="form-control" id="blood_line" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Color" class="col-md-4 control-label">Color</label> 
          <div class="col-md-8"> 
           <input type="text" name="color" value="<?php echo ($this->input->post('color') ? $this->input->post('color') : $animal['color']); ?>" class="form-control" id="color" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Weight" class="col-md-4 control-label">Weight</label> 
          <div class="col-md-8"> 
           <input type="text" name="weight" value="<?php echo ($this->input->post('weight') ? $this->input->post('weight') : $animal['weight']); ?>" class="form-control" id="weight" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Weight Type" class="col-md-4 control-label">Weight Type</label> 
          <div class="col-md-8"> 
           <input type="text" name="weight_type" value="<?php echo ($this->input->post('weight_type') ? $this->input->post('weight_type') : $animal['weight_type']); ?>" class="form-control" id="weight_type" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Birth Weight" class="col-md-4 control-label">Birth Weight</label> 
          <div class="col-md-8"> 
           <input type="text" name="birth_weight" value="<?php echo ($this->input->post('birth_weight') ? $this->input->post('birth_weight') : $animal['birth_weight']); ?>" class="form-control" id="birth_weight" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Birth Weight Type" class="col-md-4 control-label">Birth Weight Type</label> 
          <div class="col-md-8"> 
           <input type="text" name="birth_weight_type" value="<?php echo ($this->input->post('birth_weight_type') ? $this->input->post('birth_weight_type') : $animal['birth_weight_type']); ?>" class="form-control" id="birth_weight_type" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Horn Status" class="col-md-4 control-label">Horn Status</label> 
          <div class="col-md-8"> 
           <input type="text" name="horn_status" value="<?php echo ($this->input->post('horn_status') ? $this->input->post('horn_status') : $animal['horn_status']); ?>" class="form-control" id="horn_status" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Fathers" class="col-md-4 control-label">Fathers</label> 
          <div class="col-md-8"> 
           <input type="text" name="fathers" value="<?php echo ($this->input->post('fathers') ? $this->input->post('fathers') : $animal['fathers']); ?>" class="form-control" id="fathers" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Father Other" class="col-md-4 control-label">Father Other</label> 
          <div class="col-md-8"> 
           <input type="text" name="father_other" value="<?php echo ($this->input->post('father_other') ? $this->input->post('father_other') : $animal['father_other']); ?>" class="form-control" id="father_other" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Mothers" class="col-md-4 control-label">Mothers</label> 
          <div class="col-md-8"> 
           <input type="text" name="mothers" value="<?php echo ($this->input->post('mothers') ? $this->input->post('mothers') : $animal['mothers']); ?>" class="form-control" id="mothers" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Mother Other" class="col-md-4 control-label">Mother Other</label> 
          <div class="col-md-8"> 
           <input type="text" name="mother_other" value="<?php echo ($this->input->post('mother_other') ? $this->input->post('mother_other') : $animal['mother_other']); ?>" class="form-control" id="mother_other" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Breeder" class="col-md-4 control-label">Breeder</label> 
          <div class="col-md-8"> 
           <input type="text" name="breeder" value="<?php echo ($this->input->post('breeder') ? $this->input->post('breeder') : $animal['breeder']); ?>" class="form-control" id="breeder" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Owner" class="col-md-4 control-label">Owner</label> 
          <div class="col-md-8"> 
           <input type="text" name="owner" value="<?php echo ($this->input->post('owner') ? $this->input->post('owner') : $animal['owner']); ?>" class="form-control" id="owner" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Herd" class="col-md-4 control-label">Herd</label> 
          <div class="col-md-8"> 
           <input type="text" name="herd" value="<?php echo ($this->input->post('herd') ? $this->input->post('herd') : $animal['herd']); ?>" class="form-control" id="herd" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Tracking Device" class="col-md-4 control-label">Tracking Device</label> 
          <div class="col-md-8"> 
           <input type="text" name="tracking_device" value="<?php echo ($this->input->post('tracking_device') ? $this->input->post('tracking_device') : $animal['tracking_device']); ?>" class="form-control" id="tracking_device" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="How Acquired" class="col-md-4 control-label">How Acquired</label> 
          <div class="col-md-8"> 
           <input type="text" name="how_acquired" value="<?php echo ($this->input->post('how_acquired') ? $this->input->post('how_acquired') : $animal['how_acquired']); ?>" class="form-control" id="how_acquired" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="How Acquired Date" class="col-md-4 control-label">How Acquired Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="how_acquired_date"  id="how_acquired_date"  value="<?php echo ($this->input->post('how_acquired_date') ? $this->input->post('how_acquired_date') : $animal['how_acquired_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
          <label for="How Disposed" class="col-md-4 control-label">How Disposed</label> 
          <div class="col-md-8"> 
           <input type="text" name="how_disposed" value="<?php echo ($this->input->post('how_disposed') ? $this->input->post('how_disposed') : $animal['how_disposed']); ?>" class="form-control" id="how_disposed" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="How Disposed Date" class="col-md-4 control-label">How Disposed Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="how_disposed_date"  id="how_disposed_date"  value="<?php echo ($this->input->post('how_disposed_date') ? $this->input->post('how_disposed_date') : $animal['how_disposed_date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
          <label for="Deactive" class="col-md-4 control-label">Deactive</label> 
          <div class="col-md-8"> 
           <input type="text" name="deactive" value="<?php echo ($this->input->post('deactive') ? $this->input->post('deactive') : $animal['deactive']); ?>" class="form-control" id="deactive" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Deactive Reason" class="col-md-4 control-label">Deactive Reason</label> 
          <div class="col-md-8"> 
           <input type="text" name="deactive_reason" value="<?php echo ($this->input->post('deactive_reason') ? $this->input->post('deactive_reason') : $animal['deactive_reason']); ?>" class="form-control" id="deactive_reason" /> 
          </div> 
           </div>
<div class="form-group"> 
                                    <label for="Type" class="col-md-4 control-label">Type</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Type_model'); 
             $dataArr = $this->CI->Type_model->get_all_type(); 
          ?> 
          <select name="type_id"  id="type_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($animal['type_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Subtypes" class="col-md-4 control-label">Subtypes</label> 
          <div class="col-md-8"> 
           <input type="text" name="subtypes" value="<?php echo ($this->input->post('subtypes') ? $this->input->post('subtypes') : $animal['subtypes']); ?>" class="form-control" id="subtypes" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Comments" class="col-md-4 control-label">Comments</label> 
          <div class="col-md-8"> 
           <input type="text" name="comments" value="<?php echo ($this->input->post('comments') ? $this->input->post('comments') : $animal['comments']); ?>" class="form-control" id="comments" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Created" class="col-md-4 control-label">Created</label> 
          <div class="col-md-8"> 
           <input type="text" name="created"  id="created"  value="<?php echo ($this->input->post('created') ? $this->input->post('created') : $animal['created']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Modified" class="col-md-4 control-label">Modified</label> 
          <div class="col-md-8"> 
           <input type="text" name="modified"  id="modified"  value="<?php echo ($this->input->post('modified') ? $this->input->post('modified') : $animal['modified']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($animal['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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