<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweetalert.css">

</head>

<body class="wrap">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MyProjectBox</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li role="presentation" class="active"><a href="<?php echo base_url(); ?>">HOME <span class="sr-only">(current)</span></a></li>
         <li role="presentation"><a href="<?php echo base_url(); ?>projects">PROJECTS</a></li>
         <?php if (!$this->session->userdata('logged_in')): ?>
        <li role="presentation"><a href="<?php echo base_url(); ?>users/register">REGISTER</a></li>
        <?php endif;?>
      </ul>

      <ul class="nav navbar-nav navbar-right">
<?php if ($this->session->userdata('logged_in')): ?>
        <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
      <?php endif;?>
              </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <div class="row">
     <?php $this->load->view('users/login');?>


     <?php $this->load->view($main_view);?>
  </div>

</div>

</body>
</html>