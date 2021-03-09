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
    <th>Username</th>
    <th>Profile pic</th>
    
    
    </thead>

    <tbody>
    <?php

    $conn=mysqli_connect('localhost','root','','student');

    if(isset($_POST['submit'])){

        $username=$_POST['username'];
        $files=$_FILES['file'];

$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];


$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored=array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored)){


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO upload(username,image) VALUES ('$username','$destinationfile')";

    $query=mysqli_query($conn,$sql);

    $display="select * from upload";
    $querydisplay=mysqli_query($conn,$display);

    //$row=mysqli_num_rows($querydisplay);

    while($result=mysqli_fetch_array($querydisplay)){

        ?>
        <tr>
            <td><?php echo $result['id'];  ?></td>
            <td><?php echo $result['username'];  ?></td>
            <td> <img src="<?php echo $result['image'];  ?>" height="100px" width="100px"></td>

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