<?php
if( session_status()!= PHP_SESSION_ACTIVE )
    session_start();
if( isset($_SESSION['UID'] ))
    $this->load->view('logInPages/logout.php');
?>
<p><strong>&copy;2014</strong></p>
</body>
</html>
