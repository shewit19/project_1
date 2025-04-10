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
    <title>Contact Messages</title>  
    <link rel="stylesheet" href="../css/style.css"> 
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
        
body {  
    font-family: 'Arial', sans-serif;  
    margin: 0;  
    padding: 0;  
    background-color: #f4f4f4;  
    color: #333;  
    width: "90%";
    overflow-x: hidden; 
} 

header {  
    background-color: #d9eed9;  
    color: black;  
    padding: 20px;  
    text-align: center;  
}  

nav {  
    margin: 20px 0;  
    text-align: center;  
}  

nav ul {  
    list-style-type: none;  
    padding: 0;  
}  

nav ul li {  
    display: inline;  
    margin: 0 15px;  
}  

nav ul li a {  
    text-decoration: none;  
    color: #4CAF50;  
    padding: 5px 10px;  
    transition: background-color 0.3s;  
}  

nav ul li a:hover {  
    background-color: rgb(133, 153, 103);  
    border-radius: 5px;  
}  

main {  
    max-width: 1200px;  
    margin: 20px auto;  
    padding: 20px;  
}  

.product-list {  
    display: flex;  
    flex-wrap: wrap;  
    justify-content: space-around;  
}  

.product {  
    background: white;
    border-radius: 8px;  
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
    margin: 15px;  
    padding: 20px;  
    text-align: center;  
    width: 300px;  
    box-sizing: border-box;  
}  

.product img {  
    max-width: 100%;  
    height: auto; 
    border-radius: 5px;  
}   

.price {  
    font-size: 1.5em;  
    color: #4CAF50;  
    margin-top: 10px;  
}  

footer{
    text-align: center;
    background-color: #2d552e;
    padding: 20px;
    color: white;
    font-size: x-large;
    
}


    </style>  
</head>  
<body>  
<header>
      <h1>Message List</h1>
    </header>
    <nav>
      <ul>
        <li><a href="../../">HOME </a></li>
        <li><a href="../.."> CARE TIPS </a></li>
        <li><a href="../html/contact.html">CONTACT </a></li>
        <li><a href="#">Your Messages</a></li>
      </ul>
    </nav>

    <main>


    <h2 style="text-align: center;">Users Contact messages</h2>  
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
    </main>

    <?php  
     
    $conn->close();  
    ?>  
        <footer>
            <section class="fo">
                <h2 class="skin-img">let's connect </h2>
                <img src="..//statics/IMAGES/phone.logo.jpg" class="skin-img"  height="20px" width="20px">
                <P class="no">+251940294432</P>
                <img src="..//statics/IMAGES/message.logo.jpg" class="skin-img" height="20px" width="20px">
                <p class="no"> shewitgmedhin15@gmail.com</p>
                <img src="..//statics/IMAGES/location.logo.jpg" class="skin-img" height="20px" width="20px">
                <p class="no">ETHIOPIA, ADDIS ABABA</p>
                <h2 class="end">THANK YOU FOR WATCHING</h2>
                <P class="she">Copyright @2025;Designed by SHEWIT</P>
            </section>  
    </footer>
</body>  
</html>  