<?php
    include 'redirection.php';
    session_start();
    unset( $_SESSION['role'] );
    unset( $_SESSION['username'] );
    redirect('index.php');
?>
<!-- Developed by Anubhav Dutta : https://www.linkedin.com/in/iamanubhavdutta/ -->