<?php session_start(); ?>
<?php include_once("confi.php"); ?>

<?php
if(isset($_POST['LOGIN'])){
    $username = $_POST['USERNAME'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `Username`='$username' and `Password`='$password'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
       echo "logged in";
       header("Location:query.html");
    }
else{
    //header("Location:login.php?loggedIn=notLoggedIn");
    echo "Not logged In";
}
}
?>

<html>
<head>
</head>
<body>
</body>
</html>