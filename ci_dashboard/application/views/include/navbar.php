<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="navbar-brand"><?php echo anchor('#','ReviewBD.net'); ?></div> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><?php echo anchor('#','Home'); ?></li>
        <li><a href="#about">Features</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Computers</a></li>
            <li class="divider"></li>
            <li><a href="#">Services</a></li>
            <li class="divider"></li>
            <li><a href="#">Gadget</a></li>
            <li class="divider"></li>
            <li><a href="#">Home Products</a></li>
            <li class="divider"></li>
            <li><a href="#">Food</a></li>
            <li class="divider"></li>
            <li><a href="#">Tourism</a></li>
            <li class="divider"></li>
            <li><a href="#">Study</a></li>
          </ul>
        </li>
        <li><a href="#" >Login</a></li>
        <li><a href="#">
          <form >
         <input type="text" placeholder="Search" id="search_input">
          </form>
          </a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a> 
        	<ul class="dropdown-menu">  
            <li><a href="<?php echo site_url('site/login'); ?>"<i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Join</a></li>
          </ul>
         </li>
      </ul>
    </div>
   <!--nav-collapse --> 
  </div>
</div>