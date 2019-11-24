<?php

include 'config.php';
// composer require google/cloud-storage;
// # Includes the autoloader for libraries installed with composer
// require __DIR__ . '/vendor/autoload.php';

// # Imports the Google Cloud client library
// use Google\Cloud\Storage\StorageClient;

// # Your Google Cloud Platform project ID
// $projectId = 'YOUR_PROJECT_ID';

// # Instantiates a client
// $storage = new StorageClient([
//     'projectId' => $projectId
// ]);
// use ../Google/Cloud/Storage/StorageClient;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
     
 $DefaultId = 0;
 
 $ImageData = $_POST['image_data'];
 
 $ImageName = $_POST['image_tag'];
 
 $ImagePath = "upload/$ImageName.jpg";
 
 $ServerURL = "hw2019/hackwestern2019/$ImagePath";
 error_log("20");
 $InsertSQL = "INSERT INTO imageupload (image_path,image_name) values('$ServerURL','$ImageName')";
 

 if(mysqli_query($conn, $InsertSQL)){
    //upload_object('hack-western-images','$ImageName', '$ServerURL');
 file_put_contents($ImagePath,base64_decode($ImageData));

 echo "Your Image Has Been Uploaded.";
 
 }
 else{
    error_log("32");
 }
 
 mysqli_close($conn);
 }else{
 echo "Please Try Again";
 error_log("38");
 }



 

/**
 * Upload a file.
 *
 * @param string $bucketName the name of your Google Cloud bucket.
 * @param string $objectName the name of the object.
 * @param string $source the path to the file to upload.
 *
 * @return Psr\Http\Message\StreamInterface
 */
function upload_object($bucketName, $objectName, $source)
{
    $storage = new StorageClient();
    $file = fopen($source, 'r');
    $bucket = $storage->bucket($bucketName);
    $object = $bucket->upload($file, [
        'name' => $objectName
    ]);
    printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
}

?>