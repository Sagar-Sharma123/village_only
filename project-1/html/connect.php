
<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];
    $conn=mysqli_connect('localhost','root','sagar','test1')  ;
    $sql = "INSERT INTO `login` (`id`, `firstName`, `lastName`, `gender`, `email`,'password' , 'number') VALUES ('0', '$firstName', '$lastName', '$gender', '$email', '$password','$number')";
    $rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
?>