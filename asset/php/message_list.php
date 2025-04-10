<?php  
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "messages"; 


$conn = new mysqli($servername, $username, $password, $dbname);  


if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  


$sql = "SELECT Name,Email,Message FROM messages";  
$result = $conn->query($sql);  
?>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Message Data List</title>  
    <link rel="stylesheet" href="style.css"> 
    <style>  
        table {  
            width: 80%;  
            border-collapse: collapse;  
            margin: 20px auto;  
        }  
        th, td {  
            border: 1px solid #ddd;  
            padding: 8px;  
            text-align: left;  
        }  
        th {  
            background-color: #f2f2f2;  
        }  
    </style>  
</head>  
<body>  
    <h2 style="text-align: center;">Message Data List</h2>  
    <table>  
        <tr>  
            <th>Name</th>  
            <th>Email</th>  
            <th>Message</th>  
        </tr>  

        <?php  
 
        if ($result->num_rows > 0) {  

            while ($row = $result->fetch_assoc()) {  
                echo "<tr>";  
                echo "<td>" . htmlspecialchars($row['Name']) . "</td>";  
                echo "<td>" . htmlspecialchars($row['Email']) . "</td>";  
                echo "<td>" . htmlspecialchars($row['Message']) . "</td>";  
                echo "</tr>";  
            }  
        }
         else {  
            echo "<tr><td colspan='3'>No messages found</td></tr>";  
        }  
        ?>  
    </table>  
    <?php  

    $conn->close();  
    ?>  
</body>  
</html>  