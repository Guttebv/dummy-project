<?php
include_once 'header.php';

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="signup.css">
</head>

<body>
<center>
<h1>Student Signup Form</h1>
</center>

  <form class="modal-content" action="dashboard.php" method="POST" enctype="multipart/form-data">
    <div class="container">
    

      
      <label for="student_name"><b>student Name</b></label>
      <input type="text" placeholder="Enter name" name="student_name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter email" name="email" required>

      <label for="mobile_no"><b>mobile_no</b></label>
      <input type="text" placeholder="Enter mobile no" name="mobile_no" required>


      <label for="ip"><b> Ip Address</b></label>
      <input type="text" name="ip" placeholder="xxxx.xxxx.xxxx." minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" required>

       
      <label for="username"><b> Username</b></label>
      <input type="text" placeholder="username" name="username" required>



       
      <label for="password"><b> Password</b></label>
      <input type="password" placeholder="password" name="password" required>


      <label for="conform_password"><b>Conform Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repass" required>
      
      <label for="register_date"><b>Register date</b></label><br>
      <input type="date" placeholder="date" name="date"  required style="width:40%; padding:15px; background:#f1f1f1;"><br>

      
     <label for="department"><b>Department:<b></label><br>

<select name="department" id="department"  style="width:40%; padding:15px; background:#f1f1f1;" >
       <option value=""></option>
       <option value="BCA">BCA</option>
       <option value="MCA">BSC</option>
       <option value="BBA">MCA</option>
       <option value="MBA">MBA</option>
       </select><br><br>
      
      <label for="file"><b>Select image:</b></label><br>
     <input type="file" id="file" name="file"><br><br>
     
     <input type="submit" name="submit">
      </div>
    </div>
  </form>
</div>


</body>
</html>


<?php

include_once 'footer.php';

?>