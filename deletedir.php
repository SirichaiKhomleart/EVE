<?php
session_start();
require_once('helper.php');
require_once('connect.php');
/**
 * Created by PhpStorm.
 * User: sirichai
 * Date: 27/11/2017 AD
 * Time: 10:19 PM
 */
$dir= "users/ID" . $_SESSION['current_ID'];
if (is_dir($dir)) {
    $objects = scandir($dir);
    foreach ($objects as $object) {
        if ($object != "." && $object != "..") {
            if (filetype($dir."/".$object) == "dir"){
                rrmdir($dir."/".$object);
            }else{
                unlink($dir."/".$object);
            }
        }
    }
    reset($objects);
    rmdir($dir);
}
rmdir($dir);