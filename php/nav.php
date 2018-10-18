<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png"> <span>GPTC KKM</span></a>
                
<?php if($loggedin)	{ ?>			
                <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="actionlogin.php" data-rel="tooltip" data-original-title="HOME">
						<i class="icon32 icon-blue icon-home"></i>
					
					</a>

				</div>
                <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="settings.php" data-rel="tooltip" data-original-title="SETTINGS">
						<i class="icon32 icon-blue icon-wrench"></i>
					
					</a>

				</div>
                <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="" data-rel="tooltip" data-original-title="RELOAD">
						<i class="icon32 icon-blue icon-arrowrefresh-s"></i>
					
					</a>

				</div>
                <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="logout.php" data-rel="tooltip" data-original-title="LOG OUT">
						<i class="icon32 icon-blue icon-close"></i>
					
					</a>
				</div>
                <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="" data-rel="tooltip" data-original-title="HELP">
						<i class="icon32 icon-blue icon-lightbulb"></i>
					
					</a>
</div>
                <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="mailcompose.php" data-rel="tooltip" data-original-title="COMPOSE MAIL">
						<i class="icon32 icon-color icon-envelope-closed" ></i>
					
					</a>
</div>
             <?php }?>
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank icon-ok"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				<?php
				if($loggedin)
				{
				?>
				<!-- user dropdown starts -->
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    
						<i class="icon-user"></i><span class="hidden-phone"><?php
						
					echo $uname; ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="settings.php">Settings</a></li>
						<li class="divider"></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
                <?php
				}
				else
					{			
				?>
               <div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    
						<i class="icon-user"></i><span class="hidden-phone">Guest</span>
						
					</a>
						</div>
          <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="signup.php" data-rel="tooltip" data-original-title="SIGNUP">
						<i class="icon32 icon-blue icon-pin"></i>
					
					</a>
				</div>
              <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="login.php" data-rel="tooltip" data-original-title="LOGIN">
						<i class="icon32 icon-blue icon-sent"></i>
					
					</a>
				</div>
        
                <div class="btn-group pull-left" >
					<a class="btn dropdown-toggle" href="" data-rel="tooltip" data-original-title="HELP">
						<i class="icon32 icon-blue icon-lightbulb"></i>
					
					</a>
</div>
                <?php
		
				}
				?>
				<!-- user dropdown ends -->
			
                <div class="btn-group pull-right" >
					<button  id="toggle-fullscreen"  data-toggle="button" class="btn dropdown-toggle" href="" data-rel="tooltip" data-original-title="FULL SCREEN MODE">
					
                     <i class="icon32 icon-blue icon-arrow-4diag"></i>
</a>
</div>
            	
				
			</div>
		</div>
	</div>