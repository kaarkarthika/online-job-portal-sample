<?php
$connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server
$link = mysql_select_db("jobdatabase", $connection); // Selecting Database from Server
if(isset($_POST['register'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$faName = $_POST['faName'];
$dob = $_POST['dob'];
$phoneNo = $_POST['phoneNo'];
$email = $_POST['email'];
$university = $_POST['university'];
$rollNo = $_POST['rollNo'];
$collegeName = $_POST['collegeName'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$major = $_POST['major'];
$yearofPassout = $_POST['yearofPassout'];
$currentPercentage = $_POST['currentPercentage'];
$currentLocation = $_POST['currentLocation'];
$preferredLocation = $_POST['preferredLocation'];
$skills = $_POST['skills'];
$certification = $_POST['certification'];
$exp = $_POST['exp'];
$cctc = $_POST['cctc'];
$pctc = $_POST['pctc'];
$filename = $_FILES['File']['name'];
    $tmpname  = $_FILES['File']['tmp_name'];
    $filesize = $_FILES['File']['size'];
    $filetype = $_FILES['File']['type'];
    $fp = fopen($tmpname, 'r');
    $file = fread($fp, filesize($tmpname));
    $file = addslashes($file);
    fclose($fp);

    if(!get_magic_quotes_gpc()) {
        $filename = addslashes($filename);
    }
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(name, faName, dob, phoneNo, email, university, rollNo, collegeName, contact, address, qualification, major, yearofPassout, currentPercentage, currentLocation, preferredLocation, skills, certification, exp, cctc, pctc, Filename, Filetype, Filesize, File) values ('$name', '$faName', '$dob', '$phoneNo', '$email', '$university', '$rollNo', '$collegeName', '$contact', '$address', '$qualification', '$major', '$yearofPassout', '$currentPercentage', '$currentLocation', '$preferredLocation', '$skills', '$certification', $exp, $cctc, $pctc, '$filename', '$filetype', '$filesize', '$file')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>
    <br/>Click here to<a href='index.php'>Home</a>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>
<br/>Click here to<a href='experience.php'>Register</a>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
 