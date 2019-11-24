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

 $InsertSQL = "INSERT INTO imageupload (image_path,image_name) values('$ServerURL','$ImageName')";
 $delTable = "DELETE FROM imageupload";
 
$q = mysqli_query($conn, $delTable);
 if(mysqli_query($conn, $InsertSQL)){
    //upload_object('hack-western-images','$ImageName', '$ServerURL');
    file_put_contents($ImagePath,base64_decode($ImageData));
    echo "Your Image Has Been Uploaded.";


//  $url = 'https://vision.google.api.com/v1/images:annotate?key=AIzaSyDKAntBjo2AJRWjYtDcsowxvcsXkgLhFJ4';


//  $params = array (base64_decode($ImageData));

//  // Build Http query using params
// $query = http_build_query ( $params);

//  $contextData = array (
//     'body' => json_encode('{"requests": [{"image": {"content": $ImageData }, "features": [ {"maxResults": 10,"type": "OBJECT_LOCALIZATION"}]}]}'),
//     'method' => 'POST',
//     'header' => "Connection: close\r\n".
//                 "Content-Length: ".strlen($query)."\r\n",
//     'content'=> $query ); 
    
//     // $context  = stream_context_create($options);
//     // $result = file_get_contents($url, false, $context);
//     // 

    
//     // Create Http context details
    
//     // Create context resource for our request
//     $context = stream_context_create (array ( 'http' => $contextData ));
//     // Read page rendered as result of your POST request
//     $result =  file_get_contents (
//                     $url,  // page url
//                     false,
//                     $context);
//         if ($result === FALSE) { 


//          }
//         var_dump($result);
//     // Server response is now stored in $result variable so you can process it

 
 
 
 }
 else{
 }
 
 mysqli_close($conn);
 }else{
 echo "Please Try Again";

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