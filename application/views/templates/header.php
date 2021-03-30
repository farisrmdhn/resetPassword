<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sneezetify - Reset Password</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="<?php echo base_url(); ?>assets/js/solid.js"></script>
    <script defer src="<?php echo base_url(); ?>assets/js/fontawesome.js"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="row text-center">
                    <div class="col-md-12">   
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" width="100">
                    </div>
                </div>
                <div class="row text-center">    
                    <div class="col-md-12" style="margin-top: 10px;">
                        <h4>Reset Password</h6>
                    </div>
                    
                </div>
            </div>

            <ul class="list-unstyled components">
                <p>Mailbox</p>
                
                <?php if($active == 'new'):?>
                <li class="active">
                <?php else:?>
                <li>
                <?php endif;?>
                    <a href="<?php echo base_url(); ?>">New</a>
                </li>

                <?php if($active == 'inbox'):?>
                <li class="active">
                <?php else:?>
                <li>
                <?php endif;?>
                    <a href="<?php echo base_url(); ?>inbox">Inbox</a>
                </li>

            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?php echo base_url(); ?>about" class="download">About</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>tutorial" class="article">Tutorial</a>
                </li>
            </ul>

            <div class="text-center">
               <small> &copy Sneezetify 2020</small>
            </div>
        </nav>
    <!-- Page Content  -->
    <div id="content">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toogle Sidebar</span>
            </button>
        </div>
    </nav>
