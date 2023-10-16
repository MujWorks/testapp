<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<?php
include "db.php";

if(isset($_GET["send"]) && $_GET["send"] == 1) {
    insertMessage($_POST);
} 

printMessages();

echo "<hr>Enter data into the form to insert to database";

?>

<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="post" action="index.php?send=1">
<p>
<label for="Name">Name </label>
<input type="text" name="txtName" id="txtName">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="txtEmail" id="txtEmail">
</p>
<p>
<label for="phone">Phone</label>
<input type="text" name="txtPhone" id="txtPhone">
</p>
<p>
<label for="message">Message</label>
<textarea name="txtMessage" id="txtMessage"></textarea>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>