<script>
    function func(){
        alert("Your message was successfully sent");
        window.location.href = "main.html";
    }
</script>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reg="'". $_POST['name']."'";
    $im="'". $_POST['email']."'";
    $cn="'". $_POST['message']."'";
    

    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
    $dbname = "digimark";  

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

$stmt = $conn->query("INSERT INTO query VALUES ($reg, $im, $cn)");


if ($stmt==TRUE) {
    
    ?> <script>func()</script><?php
} else {
    // Insertion failed
    echo "Error inserting data ";
}
    $conn->close();
}



?>