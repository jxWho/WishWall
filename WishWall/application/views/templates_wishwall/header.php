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
        <?php echo base_url();?>application/css/test2.css" >

        <script type="text/javascript" src="<?php echo base_url();?>application/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>application/js/wishDetails.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>application/js/newWish.js"></script>
        <script type="text/javascript">
            function borderColor(){
                if(self['oText'].style.borderColor=='red')
                {
                    self['oText'].style.borderColor = 'yellow';
                }
                else
                {
                    self['oText'].style.borderColor = 'red';
                }
                oTime = setTimeout('borderColor()',400);
            }
        </script>
</head>
<body style="background: url(<?php echo base_url();?>/application/css/images/bg.jpg); ">
<h1><?php echo $title ?></h1>
