<?php
if(isset($_REQUEST['submit'])) {
$name = $email = $website = $comment = $gender = "";

if($_SERVER["REQUEST_METHOD"] = "post"){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $website = $_REQUEST['website'];
    $comment = $_REQUEST['comment'];
    $gender = $_REQUEST['gender'];
}
  function test_input($data){
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
      
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .center {
        background: #ccc;
        border: 2px solid blueviolet;
        margin-left: 25%;
        margin-right: 25%;
    }
    </style>
    <title>Form_Validation for Electro-Tech Solution</title>
</head>

<body>
    <center class="center">
        <h2>PHP Form Validation</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Name: <input type="text" name="name"></br><br>
            E-mail: <input type="text" name="email"></br><br>
            Website: <input type="text" name="website"></br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea></br><br>
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