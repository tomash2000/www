<!DOCTYPE>

<html>
	<head>
<title>Connection</title>
	</head>
	<body>
<?php
$Connection=mysql_connect('localhost','root','');
if($Connection){
	echo "DataBase Connected <br>";
}
else{
	error.mysql_connect();
}
$Selected=mysql_select_db('record',$Connection);
if($Selected){
	echo "DataBase Selected";
}
else{
	error.mysql_select_db();
}
?>

	    
	</body>
</html>
