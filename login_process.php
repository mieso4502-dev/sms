<?php
session_start(); include "db.php";
$u=$_POST['u']; $p=$_POST['p'];
$q=$conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
if($q->num_rows) {$_SESSION['u']=$u; header("Location: view.php");}
else echo "Login Failed";
?>
