<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SE 10th</title>
    <link rel="icon" href="<?php echo $this->config->item('images');?>logo.png" type="image/png">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script> -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/button.css') ?>"> 
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('css');?>card.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('css');?>style.css">
</head>
<?php $site_img = $this->config->item('images')."background.jfif";?>
<?php $site_font = $this->config->item('fonts')."Cavorting.otf";?>
<style>

    @font-face {
        font-family: cavorting;
        src: url(<?php echo $site_font;?>);
    }

    .title-se {
        font-family: cavorting !important;
    }

    body{
        /* The image used */
        background: url(<?php echo $site_img;?>) repeat center center fixed !important;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

<body>

<!-- <nav class="navbar navbar-light g-pink-blue">
  <a class="navbar-brand text-white" href="http://localhost/10th_SE">
    <img src="<?php //echo $this->config->item('images');?>logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    SE 10th Anniversary
  </a>
</nav> -->
