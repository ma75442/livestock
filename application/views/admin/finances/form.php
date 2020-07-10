<a  href="<?php echo site_url('admin/finances/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Finances'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/finances/save/'.$finances['id'],array("class"=>"form-horizontal")); ?>
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
            <option value="<?=$dataArr[$i]['id']?>" <?php if($finances['users_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['email']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
                                       <label for="Date" class="col-md-4 control-label">Date</label> 
            <div class="col-md-8"> 
           <input type="text" name="date"  id="date"  value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $finances['date']); ?>" class="form-control-static datepicker"/> 
            </div> 
           </div>
<div class="form-group"> 
          <label for="Type" class="col-md-4 control-label">Type</label> 
          <div class="col-md-8"> 
           <input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $finances['type']); ?>" class="form-control" id="type" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Amount" class="col-md-4 control-label">Amount</label> 
          <div class="col-md-8"> 
           <input type="text" name="amount" value="<?php echo ($this->input->post('amount') ? $this->input->post('amount') : $finances['amount']); ?>" class="form-control" id="amount" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Comments" class="col-md-4 control-label">Comments</label> 
          <div class="col-md-8"> 
           <input type="text" name="comments" value="<?php echo ($this->input->post('comments') ? $this->input->post('comments') : $finances['comments']); ?>" class="form-control" id="comments" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Credit Debit" class="col-md-4 control-label">Credit Debit</label> 
          <div class="col-md-8"> 
           <input type="text" name="credit_debit" value="<?php echo ($this->input->post('credit_debit') ? $this->input->post('credit_debit') : $finances['credit_debit']); ?>" class="form-control" id="credit_debit" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Created" class="col-md-4 control-label">Created</label> 
          <div class="col-md-8"> 
           <input type="text" name="created" value="<?php echo ($this->input->post('created') ? $this->input->post('created') : $finances['created']); ?>" class="form-control" id="created" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Modified" class="col-md-4 control-label">Modified</label> 
          <div class="col-md-8"> 
           <input type="text" name="modified" value="<?php echo ($this->input->post('modified') ? $this->input->post('modified') : $finances['modified']); ?>" class="form-control" id="modified" /> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($finances['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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