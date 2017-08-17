<?php
    $f = $_GET['f'];

//Updating DB 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//selecting values from DB
$sql = "SELECT * FROM share WHERE keycode =".$f;
$name1 = $conn->query($sql);
$row = $name1->fetch_assoc();
$nam = $row["filename"];
$passwo = $row["password"];
$name = "/C:/xampp/htdocs/".$nam;
if($passwo == NULL){
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile($name); 
    //exit;
}else{
    echo "This is not a valid link";
}

$conn->close();
?>
