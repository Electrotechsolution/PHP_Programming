<?php
Session_start();
Session_unset();
Session_destroy();

echo "Session Successfully Destroy";
?>