<?php
/**
 * Created by PhpStorm.
 * User: sirichai
 * Date: 29/11/2017 AD
 * Time: 6:43 PM
 */
function deleteDir($dirPath)
{
    if (!is_dir($dirPath)) {
        if (file_exists($dirPath) !== false) {
            unlink($dirPath);
        }
        return;
    }

    if ($dirPath[strlen($dirPath) - 1] != '/') {
        $dirPath .= '/';
    }

    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }

    rmdir($dirPath);
}

$dirtarget= "users/ID38";
deleteDir($dirtarget);