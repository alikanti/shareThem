
<?php
$target_dir = "C://xampp//htdocs//";
$file_name = basename($_FILES["fileToUpload"]["name"]);
$passwd = $_POST["pass"];
$target_file = $target_dir .$file_name ;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//key generation
$a = rand(0,9);
$b = rand(0,9);
$c = rand(0,9);
$d = rand(0,9);
$e = rand(0,9);
$f = rand(0,9);
$g = "".$a.$b.$c.$d.$e.$f;



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

//Inserting into DB
$sql = "INSERT INTO share (filename, keycode, password)
VALUES ( '".$file_name."', '".$g."',"."'".$passwd."')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
   // echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
/* Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br>";
	if($passwd != NULL){
		echo "Your Download link : 10.3.2.57/passcheck.php?f=".$g;
	}
	else{
		echo "Your Download link : 10.3.2.57/download.php?f=".$g;
	}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

