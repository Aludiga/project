<?php include 'head.php';?>
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<body class="dash" >
<p>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>

</p>
<section id="book">
<div class="page-header">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
        <h3> Welcome to our Transport Management system.</h3>
    <h4>To book  a service with us, Kindly  provide </h4>
</div>

<div class="book">
    <form action="welcome_get.php" method="get">
        <input type="text" name="Pick point" placeholder="Pick point" >
        <input type="text" name="Destination" placeholder="Destination">
        <input type="text" name="Date" placeholder="Date ">
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>


</section>
</html>


<?php include 'footer.php';?>