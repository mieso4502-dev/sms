<?php
include "db.php"; $id=$_GET['id'];
if($_POST){
$conn->query("UPDATE students SET
name='$_POST[n]',course='$_POST[c]' WHERE id=$id");
header("Location:view.php");
}
$r=$conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
?>
<form method="post">
<input name="name" value="<?=$r['name']?>">
<input name="course" value="<?=$r['course']?>">
<button>Update</button>
</form>
