<?php
function redirect($url){
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
    echo "<noscript>";
    echo '<meta http-equiv="refresh" content="0;url=$url">'; 
    echo "</noscript>";
  }
?>
<!-- Developed by Anubhav Dutta : https://www.linkedin.com/in/iamanubhavdutta/ -->