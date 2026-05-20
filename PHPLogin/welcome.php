<html lang="en">
<body>

<?php
    session_start();
    include 'header.inc'; 
    if (isset($_SESSION['user'])) {
        echo "Welcome, " .$_SESSION['user'];
        echo "<hr><a href='login.php'>Logout?</a><hr>";
        include 'footer.inc';
    } else {
        header('Location:login.php');
    }
    
?>

</body>