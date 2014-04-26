<?php
    $uname = $WhelperOrMaker->UserName;
    $address = $WhelperOrMaker->Address;
    $email = $WhelperOrMaker->Email;
    $pNumber = $WhelperOrMaker->PhoneNumber;
?>
<div class='informationCard'>
    <p>Name: <?php echo $uname ?></p>
    <p>Address: <?php echo $address ?></p>
    <p>Email: <a href="mailto:<?php echo $email?>"><?php echo $email?></a></p>
    <p>Phone Number: <?php echo $pNumber?></p>
</div>
