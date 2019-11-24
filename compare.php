<!DOCTYPE HTML>
<html lang = "en">
<head>
  <!-- basic.html -->
  <title>basic.html</title>
  <meta charset = "UTF-8" />
</head>
<body>
  <h1>Level One Headline</h1>
  <p>
    This is a paragraph.
    Note that the text is automatically wrapped.
  </p>
  <?php
echo "HelloWorld";
$db_host='localhost';
$db_user='root';
$db_pass='123456789';
$db_date='hackwestern';

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_date);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = 'select * from inventory';
// $names_inv = array('SELECT Name from inventory');
// $names_items = array('SELECT image_name from image_upload');
// $sql = "UPDATE inventory Set Status='Out of Stock' WHERE Name='Undefined'";

// for ($i=0;$i<3;$i++){
//         $sql = "UPDATE inventory SET Status= 'In Stock' WHERE $names_inv[$i] == $names_items[$i]";
//         $sql = "UPDATE inventory SET Status= 'Missplaced' WHERE $names_inv[$i] != $names_items[$i]";
        
// }


// $data = "SELECT inventory.Id as id_one,inventory.Name as name_one,imageupload.image_name as imageupload_two FROM inventory INNER JOIN imageupload ON (inventory.Id = imageupload.Id)";
// $sql = mysql_query($conn, $data);

//     if(mysql_num_rows($sql) > 0)
//     {
//          while($fetch = mysql_fetch_assoc($sql))
//          {
//                if($fetch['name_one'] = $fetch['name_two']) //if its not the same
//                {
//                 $sql = "UPDATE inventory SET Status='In Stock";
//                }
//                else //if its not the same
//                {
//                 $sql = "UPDATE inventory SET Status='Missplaced";
//                }

//          }
//     }



?>

</body>
</html>

