<a  href="<?php echo site_url('admin/addresses/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Addresses'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/addresses/save/'.$addresses['id'],array("class"=>"form-horizontal")); ?>
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
            <option value="<?=$dataArr[$i]['id']?>" <?php if($addresses['users_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['email']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Address1" class="col-md-4 control-label">Address1</label> 
          <div class="col-md-8"> 
           <input type="text" name="address1" value="<?php echo ($this->input->post('address1') ? $this->input->post('address1') : $addresses['address1']); ?>" class="form-control" id="address1" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Address2" class="col-md-4 control-label">Address2</label> 
          <div class="col-md-8"> 
           <input type="text" name="address2" value="<?php echo ($this->input->post('address2') ? $this->input->post('address2') : $addresses['address2']); ?>" class="form-control" id="address2" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Address3" class="col-md-4 control-label">Address3</label> 
          <div class="col-md-8"> 
           <input type="text" name="address3" value="<?php echo ($this->input->post('address3') ? $this->input->post('address3') : $addresses['address3']); ?>" class="form-control" id="address3" /> 
          </div> 
           </div>
<div class="form-group"> 
                                    <label for="City" class="col-md-4 control-label">City</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('City_model'); 
             $dataArr = $this->CI->City_model->get_all_city(); 
          ?> 
          <select name="city_id"  id="city_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($addresses['city_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="City Other" class="col-md-4 control-label">City Other</label> 
          <div class="col-md-8"> 
           <input type="text" name="city_other" value="<?php echo ($this->input->post('city_other') ? $this->input->post('city_other') : $addresses['city_other']); ?>" class="form-control" id="city_other" /> 
          </div> 
           </div>
<div class="form-group"> 
                                    <label for="State" class="col-md-4 control-label">State</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('State_model'); 
             $dataArr = $this->CI->State_model->get_all_state(); 
          ?> 
          <select name="state_id"  id="state_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($addresses['state_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="State Other" class="col-md-4 control-label">State Other</label> 
          <div class="col-md-8"> 
           <input type="text" name="state_other" value="<?php echo ($this->input->post('state_other') ? $this->input->post('state_other') : $addresses['state_other']); ?>" class="form-control" id="state_other" /> 
          </div> 
           </div>
<div class="form-group"> 
                                    <label for="Country" class="col-md-4 control-label">Country</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Country_model'); 
             $dataArr = $this->CI->Country_model->get_all_country(); 
          ?> 
          <select name="country_id"  id="country_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($addresses['country_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['sortname']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Zip" class="col-md-4 control-label">Zip</label> 
          <div class="col-md-8"> 
           <input type="text" name="zip" value="<?php echo ($this->input->post('zip') ? $this->input->post('zip') : $addresses['zip']); ?>" class="form-control" id="zip" /> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Created" class="col-md-4 control-label">Created</label> 
          <div class="col-md-8"> 
           <input type="text" name="created"  id="created"  value="<?php echo ($this->input->post('created') ? $this->input->post('created') : $addresses['created']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>
<div class="form-group"> 
                                       <label for="Modified" class="col-md-4 control-label">Modified</label> 
          <div class="col-md-8"> 
           <input type="text" name="modified"  id="modified"  value="<?php echo ($this->input->post('modified') ? $this->input->post('modified') : $addresses['modified']); ?>" class="form-control-static datepicker"/> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($addresses['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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