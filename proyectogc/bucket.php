<?php
use Google\Cloud\Storage\StorageClient;


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