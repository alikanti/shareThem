<form action = "" method="post" enctype="multipart/form-data">
    Enter Password:
    <input type="password" name="pass" id="pass"><br>
    <input name="submit" type="submit" />
</form>	

<?php
if(isset($_POST['submit'])){
    $f = $_GET['f'];
    $passwd = $_POST['pass'];

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
$passw = $row["password"];

if($passw == $passwd){
//selecting values from DB
$nam = $row["filename"];
$name = "C:/xampp/htdocs/".$nam;
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
    exit;	
}else{
     echo "You entered a wrong Password. Please Try Again";
}

$conn->close();
}
?>
