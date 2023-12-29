<?php
function createZip($source, $destination)
{
    if (!extension_loaded('zip') || !file_exists($source)) {
        return false;
    }

    $zip = fopen($destination, 'w');

    if (!$zip) {
        return false;
    }

    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

    foreach ($files as $file) {
        $file = realpath($file);

        if (is_dir($file)) {
            continue;
        }

        $fileContent = file_get_contents($file);

        $relativePath = str_replace($source . DIRECTORY_SEPARATOR, '', $file);

        $zipEntry = pack('VvvVVVVvVV',
            0x04034b50,           // local file header signature
            0x0A,                 // version needed to extract
            0,                    // general purpose bit flag
            0,                    // compression method
            0,                    // last mod file time
            0,                    // last mod file date
            crc32($fileContent),  // crc-32
            strlen($fileContent), // compressed size
            strlen($fileContent), // uncompressed size
            strlen($relativePath) // file name length
        );

        fwrite($zip, $zipEntry);
        fwrite($zip, $relativePath);
        fwrite($zip, $fileContent);
    }

    fclose($zip);

    return true;
}

$sourceDirectory = "I:\\www-mojarkobi\\php-tutorial\\File structure\\images";
$destinationZip = "I:\\www-mojarkobi\\php-tutorial\\File structure\\images\\archive.zip";

if (createZip($sourceDirectory, $destinationZip)) {
    echo 'ZIP archive created successfully.';
} else {
    echo 'Failed to create ZIP archive.';
}
?>
