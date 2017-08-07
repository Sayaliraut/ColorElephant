<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Form</title>
		<link rel="stylesheet" type="text/css" href="Style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div class="Main_div">Student Form </div>
		<div class="form-div">
			<form name="myForm" action="test.php" method="post">
				<div id="fname">
					Name:&nbsp;<input name="f-name" id="name" type="text" placeholder="Name" onblur="checkfname();">
					<span style="color:red" id="demo">*</span><br>
				</div>	
				<div id="email">
					E-mail:&nbsp;<input name="e_mail" type="email" id="mail" placeholder="E-mail" onblur="checkmail();">
					<span style="color:red" id="mail-err">*</span><br>
				</div>
				<div id="w-url">
					Web Address:&nbsp;<input name="web-url" type="url" id="url" placeholder="Web-Address" onblur="checkurl();">
					<span style="color:red" id="url-err">*</span><br>
				</div>
				<div id="cover">
					Cover Letter: <textarea id="letter" name="comment" rows="5" cols="40" onblur="checkletter();"></textarea>
					<span style="color:red" id="letter-err">*</span><br>
				</div>
				<div id="upload">
					Select your file:<input name="userfile" type="file" id="browse">
					<span style="color:red" id="upload-err"></span><br>
				</div>
				<div id="radio">
					Do You Like Working?&nbsp;&nbsp;<input type="radio" name="rad" id="Yes" checked="checked" value="YES" data-waschecked="true"/>YES
					<input type="radio" name="rad" id="No" value="NO">NO
				</div>
				<div></div>
				<div id="sub">
					<input type="submit">
				</div>
			</form>
		</div>
	</body>
</html>