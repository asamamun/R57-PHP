<img src="file-permission2.jpg" alt="" width="400px">
<img src="File-Permissions.webp" alt="" width="400px">
<?php
function deleteDirectory($dir)
{
    // open a directory handle
    if ($dh = opendir($dir)) {
        // Iterate through directory contents
        while (($file = readdir($dh)) != false) {
            // skup files . and ..
            if (($file == ".") || ($file == "..")) continue;
            if (is_dir($dir . '/' . $file))
                // Recursive call to delete subdirectory
                deleteDirectory($dir . '/' . $file);
            else
                // delete file
            {
                //unlink($dir . '/' . $file,0777);
                @chmod( $dir . '/' . $file, 0777 );
                @unlink( $dir . '/' . $file );
            }
               // unlink($dir . '/' . $file,);
        }
        closedir($dh);
        rmdir($dir);
    }
}

$url = "E:/javascript-class-copy/";
try {
    deleteDirectory($url);
} catch (\Throwable $th) {
    echo $th->getMessage();
}

