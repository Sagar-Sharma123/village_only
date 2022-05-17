<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    $email = $_post['email'];
    $password = $_post['password'];
    echo $email;
    $con = new mysqli("localhost","root","","test1");
    if($con->connect_error){
        die("failed to connect :".$con->connect_error);
    }else{
        $stmt=$con->prepare("select * from login where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows >0) {
            $data=$stmt_result->fetch_assoc();
            if($data['password']===$password){
                echo "<h2>Login Successfully</h2>";
            }else{
                echo "<h2>Invalid Email or Password</h2>";
            }
        }else{
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
?>
    </div>
</body>
</html>
