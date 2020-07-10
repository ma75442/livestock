<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css"> 
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Health_issues'); ?></h3>
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
<!--Data display of health_issues-->    
<table   cellspacing="3" cellpadding="3" class="table" align="center">
    <tr>
		<th>Animal</th>
		<th>Animal id</th>
<th>Issue</th>
<th>Treatment</th>
<th>Issue Date</th>
<th>Status</th>
<th>Created</th>
<th>Modified</th>

    </tr>
	<?php foreach($health_issues as $c){ ?>
    <tr>
		<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Animal_model');
									   $dataArr = $this->CI->Animal_model->get_animal($c['animal_id']);
									   echo $dataArr['name'];?>
									</td>
									<td><?php echo $c['animal_id']; ?></td>
<td><?php echo $c['issue']; ?></td>
<td><?php echo $c['treatment']; ?></td>
<td><?php echo $c['issue_date']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Status_model');
									   $dataArr = $this->CI->Status_model->get_status($c['status_id']);
									   echo $dataArr['name'];?>
									</td>
<td><?php echo $c['created']; ?></td>
<td><?php echo $c['modified']; ?></td>

    </tr>
	<?php } ?>
</table>
<!--End of Data display of health_issues//--> 