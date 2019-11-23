
<?php
 
include 'DatabaseConfig.php';
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 $DefaultId = 0;
 
 $ImageData = $_POST['image_data'];
 
 $ImageName = $_POST['image_tag'];
 
 $ImagePath = "hw2019/hackwestern2019/upload/$ImageName.jpg";
 
 $ServerURL = "http://192.168.0.15/hw2019/hackwestern2019/$ImagePath";
 
 $InsertSQL = "INSERT INTO imageupload (image_path,image_name) values('$ServerURL','$ImageName')";
 
 if(mysqli_query($conn, $InsertSQL)){
 
 file_put_contents($ImagePath,base64_decode($ImageData));
 
 echo "Your Image Has Been Uploaded.";
 }
 
 mysqli_close($conn);
 }else{
 echo "Please Try Again";
 }
 
?>