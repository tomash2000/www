<?php
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('record',$Connection);

$Update_Record=$_GET['Update'];
$ShowQuery="SELECT * FROM emp_record
WHERE id='$Update_Record'";
$Update=mysql_query($ShowQuery);
while($DataRows=mysql_fetch_array($Update)){
    $Update_Id=$DataRows['id'];
    $EName=$DataRows['enam'];
    $SSN=$DataRows['ssn'];
    $Dept=$DataRows['dept'];
    $Salary=$DataRows['salary'];
    $HomeAddress=$DataRows['homeaddress'];
    
    
}


?>

<!DOCTYPE>

<html>
	<head>
		<title>Update . PHP</title>
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
.success{
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
#center{
	width: 500px;
	margin:0 auto;
}
fieldset{
	background-image: url("ems1.jpg");
	background-repeat: repeat-x;
}
body{
	background-image: url("2.jpg");
	background-repeat: repeat;
}
</style>
	<body>
<div id="center">
	<form action="Update.php?Update_Id=<?php echo $Update_Id;?>" method="Post">
	<fieldset>
<span class="FieldInfo">Employee Name:</span><br><input type="text" Name="EName" value="<?php echo $EName;?>"><br>
<span class="FieldInfo">Social Security Number:</span><br><input type="text" Name="SSN" value="<?php echo $SSN;?>"><br>
<span class="FieldInfo">Department:</span><br><input type="text" Name="Dept" value="<?php echo $Dept;?>"><br>
<span class="FieldInfo">Salary:</span><br><input type="text" Name="Salary" value="<?php echo $Salary;?>"><br>
<span class="FieldInfo">Home Address:</span><br><textarea Name="HomeAddress"><?php echo $HomeAddress;?></textarea><br>
<br><input type="Submit" Name="Submit" value="Update"><br>
		
		
	</fieldset>	
		
		
	</form>
</div>
		
		

	    
	</body>
</html>
<?php
//This PHP BLOck is for Editing the data that you got in your form
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('record',$Connection);
if(isset($_POST['Submit'])){
    $Update_Id=$_GET['Update_Id'];
    $EName=$_POST['EName'];
    $SSN=$_POST['SSN'];
    $Dept=$_POST['Dept'];
    $Salary=$_POST['Salary'];
    $HomeAddress=$_POST['HomeAddress'];
$UpdateQuery="UPDATE emp_record SET enam='$EName',ssn='$SSN',dept='$Dept',salary='$Salary',homeaddress='$HomeAddress'
WHERE id='$Update_Id'";
$Execute=mysql_query($UpdateQuery);
   if($Execute){
    function redirect_to($NewLocation){
        header("Location:".$NewLocation);
        exit;
    }
    redirect_to("Update_Into_DataBase.php?Updated=Recored has been Updated Successfully");
    } 
}

?>