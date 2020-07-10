<!--Left Menu-->
<nav>
    <ul class="sidebar-menu" data-widget="tree">
        <li class="sidemenu-user-profile d-flex align-items-center">
            <div class="user-thumbnail">
                <?php
				  if(is_file(APPPATH.'../public/'.$this->session->userdata['file_picture'])&&file_exists(APPPATH.'../public/'.$this->session->userdata['file_picture']))
				   {
				 ?>
					  <img  src="<?php echo base_url().'public/'.$this->session->userdata['file_picture']?>" alt="">
				<?php
					}
					else
					{
				?>
					  <img class="border-radius-50" src="<?php echo base_url()?>public/uploads/no_image.jpg">
				<?php		
					}
				  ?>
            </div>
            <div class="user-content">
                <h6><?php echo $this->session->userdata['first_name']?> <?php echo $this->session->userdata['last_name']?></h6>
                <!--<span>Pro User</span>-->
            </div>
        </li>
        <li <?php if($this->router->fetch_class()=="homecontroller"){?>
					class="active" <?php }?>><a href="<?php echo site_url('homecontroller'); ?>"><i class="icon_lifesaver"></i> <span>Dashboard</span></a></li>
<?php
		     $menu_open =  false; 
		     if($this->router->fetch_class()=="animal" ||
			    $this->router->fetch_class()=="animal_images" ||
				$this->router->fetch_class()=="animal_weights" 
			 )
			 {
				$menu_open =  true; 
			 }
		?>
<li class="treeview <?php if($menu_open==true){?>menu-open<?php }?>">
            <a href="javascript:void(0)"><i class="icon_document_alt"></i> <span>Livestock</span> <i class="fa fa-angle-right"></i></a>
            <ul class="treeview-menu" <?php if($menu_open==true){?>style="display: block;"<?php }?>>
			<li <?php if($this->router->fetch_class()=="animal"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/animal/index'); ?>"><i class="icon_table"></i>Animal</a></li>
<li <?php if($this->router->fetch_class()=="animal_images"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/animal_images/index'); ?>"><i class="icon_table"></i>Animal Images</a></li>
<li <?php if($this->router->fetch_class()=="animal_weights"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/animal_weights/index'); ?>"><i class="icon_table"></i>Animal Weights</a></li>
            </ul>
</li>
<?php
		     $menu_open =  false; 
		     if($this->router->fetch_class()=="feed_plans" ||
			    $this->router->fetch_class()=="feed_plans_animals" ||
				$this->router->fetch_class()=="feeds" 
			 )
			 {
				$menu_open =  true; 
			 }
		?>
<li class="treeview <?php if($menu_open==true){?>menu-open<?php }?>">
            <a href="javascript:void(0)"><i class="icon_document_alt"></i> <span>Feeding System</span> <i class="fa fa-angle-right"></i></a>
            <ul class="treeview-menu" <?php if($menu_open==true){?>style="display: block;"<?php }?>>
<li <?php if($this->router->fetch_class()=="feed_plans"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/feed_plans/index'); ?>"><i class="icon_table"></i>Feed Plans</a></li>
<li <?php if($this->router->fetch_class()=="feed_plans_animals"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/feed_plans_animals/index'); ?>"><i class="icon_table"></i>Feed Plans Animals</a></li>
<li <?php if($this->router->fetch_class()=="feeds"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/feeds/index'); ?>"><i class="icon_table"></i>Feeds</a></li>
            </ul>
</li>        

<!-- <li <?php if($this->router->fetch_class()=="city"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/city/index'); ?>"><i class="icon_table"></i>City</a></li>
<li <?php if($this->router->fetch_class()=="equipments"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/equipments/index'); ?>"><i class="icon_table"></i>Equipments</a></li> -->
<!-- <li <?php if($this->router->fetch_class()=="finances"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/finances/index'); ?>"><i class="icon_table"></i>Finances</a></li> -->
<li <?php if($this->router->fetch_class()=="addresses"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/addresses/index'); ?>"><i class="icon_table"></i>Addresses</a></li>

<li <?php if($this->router->fetch_class()=="health_issues"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/health_issues/index'); ?>"><i class="icon_table"></i>Health Issues</a></li>

<!-- <li <?php if($this->router->fetch_class()=="phinxlog"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/phinxlog/index'); ?>"><i class="icon_table"></i>Phinxlog</a></li> -->
<!-- <li <?php if($this->router->fetch_class()=="tasks"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/tasks/index'); ?>"><i class="icon_table"></i>Tasks</a></li> -->
<li <?php if($this->router->fetch_class()=="type"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/type/index'); ?>"><i class="icon_table"></i>Type</a></li>
<?php
		     $menu_open =  false; 
		     if($this->router->fetch_class()=="profile" ||
			 	$this->router->fetch_class()=="state" ||
			 	$this->router->fetch_class()=="country" ||
				$this->router->fetch_class()=="company" ||
				$this->router->fetch_class()=="users" 
			 )
			 {
				$menu_open =  true; 
			 }
		?>
        <li class="treeview <?php if($menu_open==true){?>menu-open<?php }?>">
            <a href="javascript:void(0)"><i class="icon_document_alt"></i> <span>Settings</span> <i class="fa fa-angle-right"></i></a>
            <ul class="treeview-menu" <?php if($menu_open==true){?>style="display: block;"<?php }?>>
				<li <?php if($this->router->fetch_class()=="profile"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/profile/index'); ?>">- Profile</a></li>
				<li <?php if($this->router->fetch_class()=="state"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/state/index'); ?>"><i class="icon_table"></i>State</a></li>
                <li <?php if($this->router->fetch_class()=="country"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/country/index'); ?>">- Country</a></li>
                <li <?php if($this->router->fetch_class()=="company"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/company/index'); ?>">- Company</a></li>
				<li <?php if($this->router->fetch_class()=="status"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/status/index'); ?>"><i class="icon_table"></i>Status</a></li>

				<li <?php if($this->router->fetch_class()=="users"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/users/index'); ?>">- Users</a></li>
            </ul>
        </li> 

    </ul>
</nav>
<!--End of Left Menu//-->