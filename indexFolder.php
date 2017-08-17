<html>
  <head>
    <title>CAN SHARE</title>
  </head>
  <body>
    <h1>Hello All !! This is an online sharing Platform </h1>


    <form action="upload1.php" method="post" enctype="multipart/form-data">
    Select folder to upload:	
    <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
    <input class="button" type="submit" value="Upload" />
</form>

    <p>
      <?php
	//echo "YET TO BE DONE:<br>UPLOADING FILES WITH MORE SIZE AND FOLDERS<br>DATABASE CLEANING<br>PASSWORD PROTECTION<br>LOGIN";
      ?>
    </p>
  </body>
</html>
