<?php
 
 
$id =$_GET['id'];
$conn =new mysqli("localhost","root","","crud");

$cmd="SELECT * FROM student WHERE id= $id";
$result =mysqli_query($conn,$cmd);
$row=mysqli_fetch_assoc($result)






    
?>

<h1>
    update entry of the student
</h1>
    <form action="update2.php" method="get">
        <input type="text" placeholder="<?php echo $row['id']?>" name="id" value="<?php echo $row['id']?>" ><br>
        <input type="text" placeholder="<?php echo $row['student_name']?>" name="student_name" value="<?php echo $row['student_name']?>" ><br>
        <input type="number" placeholder="<?php echo $row['hindi_marks']?>" name="hindi_marks" value="<?php echo $row['hindi_marks']?>"><br>
        <input type="number" placeholder="<?php echo $row['english_marks']?>" name="english_marks" value="<?php echo $row['english_marks']?>"><br>
        <input type="number" placeholder="<?php echo $row['math_marks']?>" name="math_marks" value="<?php echo $row['math_marks']?>"><br>
        <input type="number" placeholder="<?php echo $row['chemestry_marks']?>" name="chemestry_marks" value="<?php echo $row['chemestry_marks']?>"><br>
        <input type="number" placeholder="<?php echo $row['physics_marks']?>" name="physics_marks" value="<?php echo $row['physics_marks']?>"><br>
        <button type="submit" name="update" >submit</button><br>
    </form>
 
    


    

     
    
    
     
    
    






