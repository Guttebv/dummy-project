
<?php
include_once 'config.php';
include_once 'dashheader.php';

$result = "select * from tbl_student inner join department on tbl_student.department=department.dep_id";
$display=mysqli_query($conn,$result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student dashboard</title>
<style>

th{

    background-color:white;

}


body{

    background-color:powderblue;
}

</style>
    
</head>


<body>

<center>
    <h1>Student Dashboard</h1>
 


<table border='1' cellspacing=2 cellpadding=2 >
    <th>Id</th>
    <th>Student_name</th>
    <th>Email </th>
    <th>Mobile_no</th>
    <th>Ip_Address</th>
    <th>Username</th>
    <th>Register_Date</th>
    <th colspan="3">Department</th>
    <th>Profile_Pic</th>
   
   <tr>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th>Dep_id</th>
   <th>Course</th>
   <th>Is_active</th>
   <th></th>

   
   
   </tr> 

   

<?php





while($res=mysqli_fetch_array($display))
    {
        echo '<tr>';
        echo '<td>'. $res['id']. '</td>';

        echo '<td>'. $res['student_name']. '</td>';
        echo '<td>'. $res['email']. '</td>';
        echo '<td>'. $res['mobile_no']. '</td>';
        echo '<td>'. $res['ip']. '</td>';
        echo '<td>'. $res['username']. '</td>';
        echo '<td>'. $res['register_date']. '</td>';
       
       
        echo '<td>'. $res['dep_id']. '</td>';
        echo '<td>'. $res['dep_name']. '</td>';
        echo '<td>'. $res['isactive']. '</td>';


         

        ?>

<td><img src="<?php echo $res['profile']; ?>" width="100" height="100"></td>

<?php
        

     echo '</tr>';
 }
    
 
?>

</table>

</center>

</body>
</html>


<?php

include_once 'footer.php';

?>



