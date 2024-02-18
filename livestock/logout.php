<?php
error_reporting(0);
session_start();
session_destroy();
echo "<script type='text/javascript'>alert('Logged out Successful');</script>";
echo '<meta http-equiv="refresh" content="0;url=index.php">';

?>