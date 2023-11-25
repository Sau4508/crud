<?php



$id =$_GET['id'];
echo $id;

$conn =new mysqli("localhost","root","","crud");

$result ="DELETE FROM student WHERE id =$id";

if(!mysqli_query($conn,$result)){


    echo "fail";
}
else{

    header('Location: index.php/');
}





?>