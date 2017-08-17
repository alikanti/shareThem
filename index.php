<html>
  <head>
    <title>CAN SHARE</title>
  </head>
  <body>
    <h1>Hello All !! This is an online sharing Platform </h1>


    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>Do you want to add a password ?  : 
    <input type="password" name="pass" id="pass"><br>
    <input type="submit" value="Upload" name="submit">
</form>	

    <p>
      <?php
	//echo "YET TO BE DONE:<br>UPLOADING FILES WITH MORE SIZE AND FOLDERS<br>DATABASE CLEANING<br>PASSWORD PROTECTION<br>LOGIN";
      ?>
    </p>
  </body>
</html>
