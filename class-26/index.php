<?php

$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "* Name is Required";
        }else{
            $name = test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $emailErr = "* Email is Required";
        }else{
            $email = test_input($_POST["email"]);
        }
        if(empty($_POST["website"])){
            $websiteErr = "* Website is Required";
        }else{
            $website = test_input($_POST["website"]);
        }
        if(empty($_POST["gender"])){
            $genderErr = "* Gender is Required";
        }else{
            $gender = test_input($_POST["gender"]);
        }
         if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['website'])){
            echo '<script type="text/javascript">';
            echo ' alert("Form Successfully Submitted!")'; 
            echo '</script>';
        } 
        else{
            echo '<script type="text/javascript">';
            echo ' alert(" Submition Failed!")'; 
            echo '</script>';

    }

    }
  function test_input($data){
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
      
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .center{
            background: #ccc;
            border: 2px solid blueviolet;
            margin-left: 25%;
            margin-right: 25%;
        }
        .span{
            color : red;
            font-weight: bold;
        }
    </style>
    <title>Form_Validation</title>
</head>
<body>
    <center class="center">
        <h2>PHP Form Validation</h2><br>
        <!-- <?php echo $submit; ?> -->
        <br>    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    
    <?php echo "<span class=\"span\">  $nameErr </span>"; ?></br>
        Name:    <input type="text" name="name"></br><br>
    <?php echo "<span class=\"span\">  $emailErr </span>"; ?></br>
        E-mail:  <input type="text" name="email"></br><br>
    <?php echo "<span class=\"span\">  $websiteErr </span>"; ?></br>
        Website: <input type="text" name="website"></br><br>
    
        Comment: <textarea name="comment" rows="5" cols="40"></textarea></br><br>
    <?php echo "<span class=\"span\">  $genderErr </span>"; ?></br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other</br>
        <input type="submit" name="submit" value="Submit"> 
    </form>
    </center>
</body>
</html>
<?php
// echo "<pre>";
//     print_r ($_REQUEST);
// echo "</pre>";

echo $name . "</br>";
echo $email . "</br>";
echo $website . "</br>";
echo $comment . "</br>";
echo $gender . "</br>";
?>