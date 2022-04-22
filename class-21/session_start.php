<?php
Session_start();

// $_SESSION["favsite"] = "Electrtech Solution";
// $_SESSION["fav"] = "Electrtech";
// echo "Session Successfully Start ";

$_SESSION["name"] = $_POST['name'];
$_SESSION["email"] = $_POST['email'];

// echo "Session Successfully Start ";
if(empty($_SESSION["name"]) && empty($_SESSION["email"])){
    echo "Faild";
}
else{
    // header('Location : Session_view.php');
    // echo "Session Successfully Start ";
    ?>
        <script>
        //   window.location.replace("Session_view.php");
        alert ("Success");  
            window.location.href = "Session_view.php";
           
        </Script>
    <?php
    exit;
}

?>

