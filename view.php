
<!DOCTYPE html>
<html>
    <head>
        <title>Add</title>
        <style>
      body{
        background-color: white;
        color: violet;
        font-size:20px;

      }
      .mieso{
        margin: 200px;
        font: size 100px;
        color:greenyellow;
    
      }
      .haji{
        margin-left: 122px;
        font-size: medium;
        color:blue;
      }
        </style>
    </head>

    <body>
<?php
include "db.php";
$r=$conn->query("SELECT * FROM students");
while($row=$r->fetch_assoc()){
echo $row['name']." ".$row['course']."
<a href='edit.php?id=".$row['id']."'>Edit</a>
<a href='delete.php?id=".$row['id']."'>Delete</a><br>";
}
?>
<a href="add.php">Add</a> | <a href="logout.php">Logout</a>


</body>
</html>