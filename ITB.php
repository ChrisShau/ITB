
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

// Create connection
$con = mysqli_connect("127.0.0.1", "root", "", "ITB_table");

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];



$query = "INSERT INTO Register (Name, Username, Password) VALUES ('$name', '$username', '$password')";

$rs = mysqli_query($con, $query);

if($rs)
{
    echo "Contact Records Inserted";
}
}


?>
</body>
</html>


