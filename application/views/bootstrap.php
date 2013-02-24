<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->template->title->default("Clutch Tutoring"); ?></title>
    
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
   <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script type="text/javascript" src="//api.filepicker.io/v1/filepicker.js"></script>
   <script>var base_url = '<?= base_url(); ?>';</script>
	<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  </head>

  <body class="<?php echo $this->router->fetch_class().' '.$this->router->fetch_method(); ?>">
    
    <?php echo $this->template->widget("nav", $this); ?>

    <div class="container">

      <?php if( $this->session->flashdata('error') ): ?>
      <div class="alert alert-error">
        <strong>Error</strong> <?= $this->session->flashdata('error'); ?>
      </div>
      <?php endif; ?>

      <?php if( $this->session->flashdata('success') ): ?>
      <div class="alert alert-success">
        <strong>Woohoo!</strong> <?= $this->session->flashdata('success'); ?>
      </div>
      <?php endif; ?>

      <?php echo $this->template->content; ?>

    </div>

  </body>
</html>