<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name_variable = $_POST['name']; 
    $email_variabe = $_POST['email'];
    $message_variable = $_POST['message'];

}

else{
    header("Location: contact.html");
    exit();
}



$conn = new mysqli("localhost","root","","messages");


 if($conn->connect_error){

    echo "Could not connect to the database";
    die('Connnection Failed : '.$conn -> connect_error);


    $sql_statment   = $conn->prepare("insert into messages(Name,Email,Message) values(?,?,?)");
    $sql_statment->bind_param("sss", $name_variable, $email_variabe, $message_variable);


    $sql_statment->execute();

    echo"Message sent Successfully";

    
    $sql_statment->close();
    $conn->close();
 }
?>
