<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/header') ?>
	<title>Login</title>
</head>
<body style="height:1000px;">
	<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url('co_address/index'); ?>">Address Book</a> 
      </div>
  		<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
  			<?php echo "<strong>Today</strong> ".date("d : m : Y"); ?>
  			&nbsp;
  		</div>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
   		<!-- HERE!!! FOR MAIN MENU -->           
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" style="background-color: #202020;">
    <?php 
    if($this->session->flashdata('msg') != null)
    {
     ?>
      <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    <?php 
    }
     ?>
      <!-- LOGIN -->
      <div id="login-border">
  	     <form action="<?php echo base_url('co_admin/login'); ?>" method="POST" role="login" id="login">
          <div class="">
  	   			<input name="username" type="text" class="login-form-width form-control" placeholder="Username">
  	   			<br/>
  	   			<input name="password" type="password" class="form-control" placeholder="Password">
            <br/><br/>
  	   			<button type="submit" class="btn btn-primary" style="width:100%;">Login</button>
  	 			</div>
  			</form>
			</div> 
		<!-- /. LOGIN --> 
		</div>
  <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
<?php $this->load->view('layout/script_footer') ?>
</body>
</html>