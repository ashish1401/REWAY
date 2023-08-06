

<?php
//server created
session_start();
$request_method = strtoupper($_SERVER['REQUEST_METHOD']);
$msg = " ";

if ($request_method==='POST') {
        //initialising server
        $servername = "localhost";
        $dbname = "reway technologies";
        $username = "root";
        $password = "";
        //make connection with sql
        $conn = new mysqli($servername,$username,$password,$dbname);
        echo "<br/>";
        if($conn->connect_error)
         {
            die("CONNECTION FAILED".$conn->connect_error);
         }
        $firstname = $_POST['firstname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $message = $_POST['message'];
        $date = date("Y/m/d");
        $msg = "";
        $sql = "INSERT INTO `contactform` ( `Name`, `Email`, `Address`, `Message`, `Date`) VALUES ('$firstname', '$email', '$address', '$message',current_timestamp())";
        if ($conn->query($sql) === TRUE) {
            // place variables to sessions
            $msg =  "Your response has been received!!";
            $_SESSION["msg"] = $msg;
                header('Location: ./index.php' , true, 301);
                exit;
            } else {
                $msg =  "Error: " . $sql . "<br>" . $conn->error;
                $_SESSION["msg"] = $msg;
        }
    $conn->close();
}elseif ($request_method==='GET'){
    if (isset($_SESSION["msg"])) {
        // get the valid state from the session
        $msg = $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission</title>
</head>
<body>

<div class="bg-[var(--green)]">
  <h1>
    
  </h1>
</div>
  
</body>
</html>