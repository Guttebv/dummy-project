<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">

<label for="user">Username</label>
<input type="text" name="username" id="user"><br>
<label for="file">Select Image:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">


</form>
</body>
</html>