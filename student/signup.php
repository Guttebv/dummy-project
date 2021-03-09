<?php
include_once 'header.php';
include_once 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="signup.css">

<style>

body{

background-color:powderblue;

}

</style>



</head>


<body>
<center>
<h1>Student Registration</h1>
</center>
<center>
  <form class="modal-content" action="" method="POST" enctype="multipart/form-data">
    <div class="container">
    

      
      <label for="student_name"><b>Student Name</b></label><br>
      <input type="text" placeholder="Enter name" name="student_name" required><br>

      <label for="email"><b>Email</b></label><br>
      <input type="text" placeholder="Enter email" name="email" required><br>

      <label for="mobile_no"><b>Mobile_no</b></label><br>
      <input type="text" placeholder="Enter mobile no" name="mobile_no" required><br>

       
      <label for="username"><b> Username</b></label><br>
      <input type="text" placeholder="username" name="username" required><br>



       
      <label for="password"><b> Password</b></label><br>
      <input type="password" placeholder="password" name="password"   required><br>


      <label for="confirm_password"><b>Confirm Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="repass"  required><br>
      
      <label for="register_date"><b>Register date</b></label><br>
      <input type="date" placeholder="date" name="date"  required style="width:40%; padding:15px; background:#f1f1f1;"><br>

      
     <label for="department"><b>Department:<b></label><br>

<select name="department" id="department"  style="width:40%; padding:15px; background:#f1f1f1; border:none; " ><br>
       <option value=""></option>
       <option value="101">BCA</option>
       <option value="102">BBA</option>
       <option value="103">MBA</option>
       <option value="104">MCA</option>
       </select><br><br>
      
      <label for="file"><b>Select image:</b></label>
     <input type="file" id="file" name="file"><br><br>
     
     <button type="submit"name="submit" style="width:50%">Sign Up</button>
    
      </div>
    </div>
    </center>
  </form>
 
</div>


</body>
</html>

 
<?php
    
    if(isset($_POST['submit'])){
         
         $student_name=$_POST['student_name'];
         $email=$_POST['email'];
         $mobile_no=$_POST['mobile_no'];
         $password=$_POST['password'];
         $department=$_POST['department'];
         $date=$_POST['date'];
         $ip=$_SERVER['REMOTE_ADDR'];
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

     if($password != $repass){
       

      echo "<script> alert('Password not match')</script>";
     }

     

     else{
      
     $sql="insert into tbl_student(student_name,email,mobile_no,password,department,register_date,ip,profile,conform_pass,username)
     values('$student_name','$email','$mobile_no','$password','$department', '$date', '$ip','$destinationfile','$repass','$username')";
     mysqli_query($conn,$sql);
?>


<script>


alert('signup sucessfully');


</script>



<?php


     }

    }
     
     }
    

    
    ?>
<?php

include_once 'footer.php';

?>

