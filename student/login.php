<?php
include_once 'logheader.php';

?>

<!DOCTYPE html>


<html>
<head>

<link rel="stylesheet" href="login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<center>
<h2>Student Login </h2>

  
  <form class="modal-content animate" action="" method="post">
    

    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="username" required><br><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required><br><br>
        
      <button type="submit" name="login" style="width:40%">Login</button><br>
      <label>
      
      don't have an account? <a href="signup.php">Signup</a>
      </center>
      </label>
    </div>

  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>


<?php

include_once 'footer.php';

?>





<?php

$conn= mysqli_connect('localhost','root','','student');
  if(isset($_POST['login'])){
$username = $_POST['username'];  
$password = $_POST['password'];  
  
  
    $sql = "select * from tbl_student where username = '$username' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        echo "<h3><center> Welcome $username </center></h3>"; 
        header("location:dashboard.php") ;
    }  
    else{  
        echo "<h3><center> Login failed. Invalid username or password.</center></h3>";  
    }     
}

?>  

