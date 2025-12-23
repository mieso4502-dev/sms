<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
      body{
        background-color: greenyellow;
        color: violet;
        font-size:20px;

      }
      .form{
        margin: 200px;
        font: size 100px;
        color:greenyellow;
    
      }
      .add{
        margin-left: 132px;
        font-size: medium;
        color:blue;
      }
        </style>
    </head>

    <body>

<?php
include "db.php";
if($_POST){
$conn->query("INSERT INTO students(name,course)
VALUES('$_POST[name]','$_POST[course]')");
}
?>
<form class="form" method="post">
<input name="name" placeholder="Name"><br>
<input name="course" placeholder="Course"><br>
<button class="add" >Add</button><br>
</form>
</body>
</html>

