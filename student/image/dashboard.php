<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
    <th>Id</th>
    <th>Student_name</th>
    <th>email </th>
    <th>mobile_no</th>
    <th>Ip</th>
    <th>Username</th>
   
    <th>Register Date</th>
    <th>Department</th>
    <th>Profile Pic</th>
    
    
    </thead>

    <tbody>
    <?php

    $conn=mysqli_connect('localhost','root','','student');

    if(isset($_POST['submit'])){
     
        $student_name=$_POST['student_name'];
        $email=$_POST['email'];
        $mobile_no=$_POST['mobile_no'];
        $password=$_POST['password'];
        $department=$_POST['department'];
        $date=$_POST['date'];
        $ip=$_POST['ip'];
      $files=$_FILES['file'];
        $repass=$_POST['repass'];
        $username=$_POST['username'];
       
       
      
        
       

$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];


$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored=array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored)){


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

   
    $sql="insert into tbl_student(student_name,email,mobile_no,password,department,register_date,ip,profile,conform_pass,username)
    values('$student_name','$email','$mobile_no','$password','$department', '$date', '$ip','$destinationfile','$repass','$username')";

    $query=mysqli_query($conn,$sql);

    $display="select * from tbl_student";
    $querydisplay=mysqli_query($conn,$display);

    //$row=mysqli_num_rows($querydisplay);

    while($result=mysqli_fetch_array($querydisplay)){

        ?>
        <center>
        <tr>
            <td><?php echo $result['id'];  ?></td>
            
            <td><?php echo $result['student_name'];  ?></td>
            <td><?php echo $result['email'];  ?></td>
            <td><?php echo $result['mobile_no'];  ?></td>
            <td><?php echo $result['ip'];  ?></td>
            <td><?php echo $result['username'];  ?></td>
            <td><?php echo $result['register_date'];  ?></td>
            <td><?php echo $result['department'];  ?></td>
            <td> <img src="<?php echo $result['profile'];  ?>" height="100px" width="100px"></td>

            </tr>
            
        <?php
    }

}

    }


    ?>
    
    </tbody>
    
    
    </table>
</body>
</html>