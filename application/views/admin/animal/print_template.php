<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css"> 
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Animal'); ?></h3>
Date: <?php echo date("Y-m-d");?>
<hr>
<!--*************************************************
*********mpdf header footer page no******************
****************************************************-->
<htmlpageheader name="firstpage" class="hide">
</htmlpageheader>

<htmlpageheader name="otherpages" class="hide">
    <span class="float_left"></span>
    <span  class="padding_5"> &nbsp; &nbsp; &nbsp;
     &nbsp; &nbsp; &nbsp;</span>
    <span class="float_right"></span>         
</htmlpageheader>      
<sethtmlpageheader name="firstpage" value="on" show-this-page="1" />
<sethtmlpageheader name="otherpages" value="on" /> 
   
<htmlpagefooter name="myfooter"  class="hide">                          
     <div align="center">
               <br><span class="padding_10">Page {PAGENO} of {nbpg}</span> 
     </div>
</htmlpagefooter>    

<sethtmlpagefooter name="myfooter" value="on" />
<!--*************************************************
*********#////mpdf header footer page no******************
****************************************************-->
<!--Data display of animal-->    
<table   cellspacing="3" cellpadding="3" class="table" align="center">
    <tr>
		<th>Users</th>
<th>Name</th>
<th>Short Desc</th>
<th>Long Desc</th>
<th>Ear Tag</th>
<th>Reg</th>
<th>Birth Date</th>
<th>Sex</th>
<th>Breed</th>
<th>Blood Line</th>
<th>Color</th>
<th>Weight</th>
<th>Weight Type</th>
<th>Birth Weight</th>
<th>Birth Weight Type</th>
<th>Horn Status</th>
<th>Fathers</th>
<th>Father Other</th>
<th>Mothers</th>
<th>Mother Other</th>
<th>Breeder</th>
<th>Owner</th>
<th>Herd</th>
<th>Tracking Device</th>
<th>How Acquired</th>
<th>How Acquired Date</th>
<th>How Disposed</th>
<th>How Disposed Date</th>
<th>Deactive</th>
<th>Deactive Reason</th>
<th>Type</th>
<th>Subtypes</th>
<th>Comments</th>
<th>Created</th>
<th>Modified</th>

    </tr>
	<?php foreach($animal as $c){ ?>
    <tr>
		<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td>
<td><?php echo $c['name']; ?></td>
<td><?php echo $c['short_desc']; ?></td>
<td><?php echo $c['long_desc']; ?></td>
<td><?php echo $c['ear_tag']; ?></td>
<td><?php echo $c['reg']; ?></td>
<td><?php echo $c['birth_date']; ?></td>
<td><?php echo $c['sex']; ?></td>
<td><?php echo $c['breed']; ?></td>
<td><?php echo $c['blood_line']; ?></td>
<td><?php echo $c['color']; ?></td>
<td><?php echo $c['weight']; ?></td>
<td><?php echo $c['weight_type']; ?></td>
<td><?php echo $c['birth_weight']; ?></td>
<td><?php echo $c['birth_weight_type']; ?></td>
<td><?php echo $c['horn_status']; ?></td>
<td><?php echo $c['fathers']; ?></td>
<td><?php echo $c['father_other']; ?></td>
<td><?php echo $c['mothers']; ?></td>
<td><?php echo $c['mother_other']; ?></td>
<td><?php echo $c['breeder']; ?></td>
<td><?php echo $c['owner']; ?></td>
<td><?php echo $c['herd']; ?></td>
<td><?php echo $c['tracking_device']; ?></td>
<td><?php echo $c['how_acquired']; ?></td>
<td><?php echo $c['how_acquired_date']; ?></td>
<td><?php echo $c['how_disposed']; ?></td>
<td><?php echo $c['how_disposed_date']; ?></td>
<td><?php echo $c['deactive']; ?></td>
<td><?php echo $c['deactive_reason']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Type_model');
									   $dataArr = $this->CI->Type_model->get_type($c['type_id']);
									   echo $dataArr['name'];?>
									</td>
<td><?php echo $c['subtypes']; ?></td>
<td><?php echo $c['comments']; ?></td>
<td><?php echo $c['created']; ?></td>
<td><?php echo $c['modified']; ?></td>

    </tr>
	<?php } ?>
</table>
<!--End of Data display of animal//--> 