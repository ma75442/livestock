<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css"> 
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Feeds'); ?></h3>
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
<!--Data display of feeds-->    
<table   cellspacing="3" cellpadding="3" class="table" align="center">
    <tr>
		<th>Feed Plans</th>
<th>Type</th>
<th>Apply Every</th>
<th>Quantity</th>
<th>Units</th>
<th>Cost</th>
<th>Feeding Notes</th>
<th>Created</th>
<th>Modified</th>

    </tr>
	<?php foreach($feeds as $c){ ?>
    <tr>
		<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Feed_plans_model');
									   $dataArr = $this->CI->Feed_plans_model->get_feed_plans($c['feed_plans_id']);
									   echo $dataArr['name'];?>
									</td>
<td><?php echo $c['type']; ?></td>
<td><?php echo $c['apply_every']; ?></td>
<td><?php echo $c['quantity']; ?></td>
<td><?php echo $c['units']; ?></td>
<td><?php echo $c['cost']; ?></td>
<td><?php echo $c['feeding_notes']; ?></td>
<td><?php echo $c['created']; ?></td>
<td><?php echo $c['modified']; ?></td>

    </tr>
	<?php } ?>
</table>
<!--End of Data display of feeds//--> 