<?php 
 


if(isset($_GET['update'])){

        $id =$_GET['id'];
        $student_name =$_GET["student_name"];
        $hindi_marks =$_GET["hindi_marks"];
        $english_marks =$_GET["english_marks"];
        $math_marks =$_GET["math_marks"];
        $chemestry_marks =$_GET["chemestry_marks"];
        $physics_marks =$_GET["physics_marks"];
     

$conn = mysqli_connect("localhost","root","","crud");
$cmd="UPDATE student
SET student_name='$student_name', hindi_marks='$hindi_marks',
english_marks='$english_marks',math_marks ='$math_marks',
chemestry_marks ='$chemestry_marks',physics_marks='$physics_marks'
WHERE id='$id'";
mysqli_query($conn,$cmd);




}

echo "succesfull update";

echo "<a href=index.php >click to homepage</a>";
?>