<!DOCTYPE>

<html>
	<head>
		<title>Viw From DataBase</title>
	</head>
	<style type="text/css">
input[type="text"],textarea{
	border:1px solid dashed;
	background-color: rgb(221,216,212);
	width: 480px;
	padding: .5em;
	font-size: 1.0em;
}
input[type="Submit"]{
	color: white;
	font-size: 1.0em;
	font-family: Bitter,Georgia,Times,"Times New Roman",serif;
	width: 200px;
        height: 40px;
        background-color:  #5D0580;
        border: 5px solid ;
        border-bottom-left-radius: 35px;
        border-bottom-right-radius: 35px;
        border-top-left-radius: 35px;
        border-top-right-radius: 35px;
        border-color: rgb(221,216,212);
        font-weight: bold;
        float: left;
}
.FieldInfo{
	color: rgb(251, 174, 44);
        font-family: Bitter,Georgia,"Times New Roman",Times,serif;
        font-size: 1em;
	
}
.success,caption{
color: rgb(158, 27, 214);
font-family: Bitter,Georgia,"Times New Roman",Times,serif;
font-size: 1.4em;
font-weight:bold;
}
.FieldInfoHeading{
     color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.3em;
}
div{
	width: 500px;
	margin-left: 360px;
}
	</style>
	<body>
	<table width="1000" border="5" align="center">
		<caption>Viw From DataBase</caption>
		<tr>
			<th>ID</th>
			<th>Employee Name</th>
			<th>SSN</th>
			<th>Department</th>
			<th>Salary</th>
			<th>Home Address</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
<?php
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('record',$Connection);
$ViewQuery="SELECT * From emp_record ";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
	$Id=$DataRows['id'];
	$Ename=$DataRows['enam'];
	$SSN=$DataRows['ssn'];
	$Dept=$DataRows['dept'];
	$Salary=$DataRows['salary'];
	$HomeAddress=$DataRows['homeaddress'];

?>
<tr>
<td><?php echo $Id; ?></td>
<td><?php echo $Ename; ?></td>
<td><?php echo $SSN; ?></td>
<td><?php echo $Dept; ?></td>
<td><?php echo $Salary; ?></td>
<td><?php echo nl2br($HomeAddress); ?></td>
<td>Delete</td>
<td>Update</td>
</tr>

<?php } ?>

		
	</table>
	
	    
	</body>
</html>
