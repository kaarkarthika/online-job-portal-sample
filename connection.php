<?php
$connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server
$link = mysql_select_db("jobdatabase", $connection); // Selecting Database from Server
if(isset($_REQUEST['register'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNo = $_POST['phoneNo'];
$pwd = $_POST['pwd'];
$repeatpwd = $_POST['repeatpwd'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = "insert into 'sign'(name, email, phoneNo, pwd, repeatpwd) values ('$name', '$email', '$phoneNo', '$pwd', '$repeatpwd')";
$result=mysql_query($query,$link);
if($result)
{
echo "<br/><br/><span>Data Inserted successfully...!!</span>
    <br/>Click here to<a href='index.html'>Home</a>";
}
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>
<br/>Click here to<a href='register1.php'>Register</a>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
