<html lang="en">
<body>

<?php
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];

    include 'header.inc'; 
    if($username == 'admin' && $password == 'password123') {
        $_SESSION['user'] = $username;
        header('Location:welcome.php');
    } else {
        echo "<?php include 'header.inc'; ?> Invalid login. <a href='login.php'>Try again</a> <?php include 'footer.inc'; ?> ";
    }
    include 'footer.inc'; 
?>

</body>