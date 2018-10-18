<html>
<head>
	<title>DeleteWithFileConfirmation</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<body>

<form action="#" method="post">
	<input type="file" name="uploadFile" id="uploadFileId" size="30" /> 
	<input type="submit" name="submit" id="uploadSubmitId" value="Submit" />
</form>

<script type="text/javascript">
$(document).ready(function() {
	$('#uploadSubmitId').bind("click",function() { 
		var imgVal = $('#uploadFileId').val(); 
		if(imgVal=='') { 
			alert("Please Select File.."); 
			return false; 
		} 
		else {
			var confirmation = confirm("Sure to Delete Data!");
			if (confirmation ==true){
				return true; 
			}
			else{
				return false; 
			} 
		}
	}); 
});
</script>
</body>
</html>
