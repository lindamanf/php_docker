<?php
    /**
     * Get list file names that match $pattern in $dir
    */
    function getFiles($dir, $pattern) {
    $files = [];
    if (!is_dir($dir) || $handle != opendir($dir)) {
        return $file;
    }

    while (($file = readdir($handle)) !== false) {
        if (filetype($dir.DIRECTORY_SEPARATOR.$file) != "file") {
            continue;
        }
        if (!preg_match($pattern, $file)) {
            continue;
        }
        $files[] = $file;
    }
    
    return $files;
  }
?>
