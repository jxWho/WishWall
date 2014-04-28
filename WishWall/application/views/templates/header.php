<?php
// include "./application/Classes/User.php";
// include "./application/Classes/Wish.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?> - WishWall</title>

    <?php $this->load->helper('url'); ?>

        <link rel="stylesheet" type="text/css" href="
        <?php echo base_url();?>application/css/universal.css" >

        <script type="text/javascript" src="<?php echo base_url();?>application/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>application/js/wishDetails.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>application/js/newWish.js"></script>
        <script src="<?php echo base_url('application/js/informationCard.js')?>"></script>
        <script src="<?php echo base_url('application/js/bar.js')?>"></script>
        <script src="<?php echo base_url('application/js/register.js')?>" ></script>
</head>
<body style="background: url(<?php echo base_url();?>/application/css/images/bg.jpg); ">
<?php $this->load->view('templates/bar')?>
<h1><?php echo $title ?></h1>
