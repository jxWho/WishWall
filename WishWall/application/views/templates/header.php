<?php
// include "./application/Classes/User.php";
// include "./application/Classes/Wish.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?> - WishWall</title>

    <?php $this->load->helper('url'); ?>

        <link rel="stylesheet" type="text/css" href="
        <?php echo base_url();?>application/css/universal.css" >
</head>
<body style="background: url(<?php echo base_url();?>/application/css/images/bg.jpg); ">
<h1><?php echo $title ?></h1>

