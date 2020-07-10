<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css"> 
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Addresses'); ?></h3>
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
<!--Data display of addresses-->    
<table   cellspacing="3" cellpadding="3" class="table" align="center">
    <tr>
		<th>Users</th>
<th>Address1</th>
<th>Address2</th>
<th>Address3</th>
<th>City</th>
<th>City Other</th>
<th>State</th>
<th>State Other</th>
<th>Country</th>
<th>Zip</th>
<th>Created</th>
<th>Modified</th>

    </tr>
	<?php foreach($addresses as $c){ ?>
    <tr>
		<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td>
<td><?php echo $c['address1']; ?></td>
<td><?php echo $c['address2']; ?></td>
<td><?php echo $c['address3']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('City_model');
									   $dataArr = $this->CI->City_model->get_city($c['city_id']);
									   echo $dataArr['name'];?>
									</td>
<td><?php echo $c['city_other']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('State_model');
									   $dataArr = $this->CI->State_model->get_state($c['state_id']);
									   echo $dataArr['name'];?>
									</td>
<td><?php echo $c['state_other']; ?></td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Country_model');
									   $dataArr = $this->CI->Country_model->get_country($c['country_id']);
									   echo $dataArr['sortname'];?>
									</td>
<td><?php echo $c['zip']; ?></td>
<td><?php echo $c['created']; ?></td>
<td><?php echo $c['modified']; ?></td>

    </tr>
	<?php } ?>
</table>
<!--End of Data display of addresses//--> 