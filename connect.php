<?php
    $Fname =$_POST['Fname'];
    $Lname =$_POST['Lname'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    $Apassword =$_POST['Apassword'];
 
    /*$conn =new mysqli('localhost','root','register');
    if($conn->connect_error){
        echo"$conn->connect_error";
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(Fname , Lname , email , phone , password , Apassword )values(?,?,?,?,?,?)");
        $stmt->bind_param("sssiss",$Fname,$Lname,$email,$phone,$password,$Apassword);
        $execval = $stmt->execute();
        echo $execval;
        echo"registration Succesfully.....";
        $stmt->close();
        $conn->close();
    }*/
    //Database Connection 
    $conn = new mysqli('localhost','root','','register1');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into registration1((Fname , Lname , email , phone , password , Apassword )values(?,?,?,?,?,?) ");
	    $stmt->bind_param("sssiss",$Fname,$Lname,$email,$phone,$password,$Apassword);
        $stmt->execute();
        echo "Registeration Successfully.....";
        $stmt->close();
        $conn->close();
    }
?>