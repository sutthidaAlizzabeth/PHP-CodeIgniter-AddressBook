<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/header') ?>
	<title>Search</title>
</head>
<body>
	<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Address Book</a> 
      </div>
  		<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
  			<?php echo "<strong>Today</strong> ".date("d : m : Y"); ?>
  			&nbsp;
  		</div>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
   	  <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li>
            <a class="active-menu"  href="#" ><i class="glyphicon glyphicon-search fa-3x"></i> Search</a>
          </li>
          <li>
            <a  href="<?php echo base_url('co_insert'); ?>"><i class="glyphicon glyphicon-plus fa-3x"></i> Insert</a>
          </li>
          <li>
            <a  href="<?php echo base_url('co_admin/logout'); ?>"><i class="glyphicon glyphicon-off fa-3x"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" style="background-color: #202020;">
      <!-- CONTENT -->
      <div class="show_data_border">
        <table style="width: 100%;">
          <tr style="show_data_row">
            <th class="show_data_column row_header">First Name</th>
            <td class="show_data_column row_data"><?php echo $row->firstname; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Last Name</th>
            <td class="show_data_column row_data"><?php echo $row->lastname; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Company</th>
            <td class="show_data_column row_data"><?php echo $row->company; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Job</th>
            <td class="show_data_column row_data"><?php echo $row->job; ?></td>
          </tr>
        </table>
      </div>
		  <!-- /. CONTENT --> 
		</div>
      <!-- /. PAGE WRAPPER  -->
    </div>
  <!-- /. WRAPPER  -->
<?php $this->load->view('layout/script_footer') ?>
</body>
</html>