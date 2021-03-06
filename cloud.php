<?php
use Google\Cloud\Storage\StorageClient;
// Create Http context details
/**$contextData = array (
    'body' => json_encode('{"requests": [{"image": {"content": "BASE64-ENCODED-IMAGE-HERE" }, "features": [ {"maxResults": 10,"type": "OBJECT_LOCALIZATION"}]}]}'),
    'method' => 'POST',
    'header' => "Connection: close\r\n".
                "Content-Length: ".strlen($query)."\r\n",
    'content'=> $query ); 
**/

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