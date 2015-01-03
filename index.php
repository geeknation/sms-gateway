<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SMS EXAMPLE</title>
	</head>
	<body>
		<h3>send a text</h3>
		<form action="sms.php" method="post">
			<label>Phone Number</label>
			<input type="text" id="phone" name="phone" placeholder="enter phone number e.g 0722121341">
			<br />
			<textarea name="message" id="message"></textarea>
			<br/>
			
			<input type="submit" value="Send">
		</form>
	</body>
</html>

