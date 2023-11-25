<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    add the student
</h1>
    <form action="" method="get">
<input type="text" placeholder="student_name" name="student_name" ><br>
        <input type="number" placeholder="hindi_marks" name="hindi_marks"><br>
        <input type="number" placeholder="english_marks" name="english_marks"><br>
        <input type="number" placeholder="math_marks" name="math_marks"><br>
        <input type="number" placeholder="chemestry_marks" name="chemestry_marks"><br>
        <input type="number" placeholder="physics_marks" name="physics_marks"><br>
        <button type="submit" name="submit" >submit</button><br>
    </form>
    <form action="" method="get">

        <button type="submit" name="show">show the data</button>
    </form>
</body>
</html>
<?php


if(isset($_GET['submit'])){

    $conn =new mysqli("localhost","root","","crud");

    $student_name =$_GET["student_name"];
    $hindi_marks =$_GET["hindi_marks"];
    $english_marks =$_GET["english_marks"];
    $math_marks =$_GET["math_marks"];
    $chemestry_marks =$_GET["chemestry_marks"];
    $physics_marks =$_GET["physics_marks"];


    $result= "insert into student(student_name,hindi_marks,english_marks,math_marks,chemestry_marks,physics_marks)
    VALUES('$student_name','$hindi_marks','$english_marks','$math_marks','$chemestry_marks','$physics_marks')";

   $cmd =mysqli_query($conn,$result);

  

}

if(isset($_GET['show'])){ 

    $conn =new mysqli("localhost","root","","crud");


    $cmd ="select * from student";
    $result =mysqli_query($conn,$cmd);


    echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">student_name</font> </td> 
          <td> <font face="Arial">hindi_marks</font> </td> 
          <td> <font face="Arial">english_marks</font> </td> 
          <td> <font face="Arial">math_marks</font> </td> 
          <td> <font face="Arial">chemestry_marks</font> </td> 
          <td> <font face="Arial">physics_marks</font> </td> 
          <td> <font face="Arial">delet</font> </td> 
          <td> <font face="Arial">update</font> </td> 
      </tr>';

    


   while($row = mysqli_fetch_assoc($result)){

    echo "<tr>";
   
    echo "<td>$row[id]</td>";
    echo "<td>$row[student_name]</td>";
    echo "<td>$row[hindi_marks]</td>";
    echo "<td>$row[english_marks]</td>";
    echo "<td>$row[math_marks]</td>";
    echo "<td>$row[chemestry_marks]</td>";
    echo "<td>$row[physics_marks]</td>";

    echo "<td><a href ='delete.php?id=$row[id]'>delet</a></td>";
    echo "<td><a href ='update.php?id=$row[id]'>update</a></td>";

    
 
  
  echo "</tr>";

   }
   }








?>
<link rel="stylesheet" href="style.css">