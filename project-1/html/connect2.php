
<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $profile_photo=$_POST['profile_photo']
    $password=$_POST['password'];
    $number=$_POST['number'];
    $conn=new mysqli('localhost','root','sagar','test1')  ;
    if($conn->connect_error){
        die('connection Failed: '.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into login(firstName,lastName,gender,email,profile_photo,password,number)
            values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssbsi",$firstName,$lastName,$gender,$email,$profile_photo,$password,$number);
        $stmt->execute();
        echo "registored successfully.....";
        $stmt->close();
        $conn->close();
    }
?>