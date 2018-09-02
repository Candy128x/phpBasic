<?php



	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
	var_dump(basename($_FILES["fileUpload"]["name"]));
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


	if(isset($_POST["submit"]))
	{
		$check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
		if($check !== false)
		{
			echo "File is an Image : ".$check["mime"].".";
			$uploadOk = 1;
		}else{
			echo "File is not an Image.. ";
			$uploadOk = 0;
		}

	}



if($uploadOk == 0)
{
	echo "<br> File Not Uploaded..";
}else{

	if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file))
	{
		echo "<br> the file ".basename($_FILES["fileUpload"]["name"]). " has been uploadded";
							
							$filePath = realpath($target_file);
							$file = $_FILES["fileUpload"]["name"];

							echo '<br><br><font color="red">i want '.$filePath. "".$file."</font>";

							
							echo "Inserted...<br>";


	}else{
		echo "<br> err uploading...";
	}

}

?>