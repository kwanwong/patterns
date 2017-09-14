<?php
/**
 * Created by PhpStorm.
 * User: Kwan Wong
 * Date: 2017/9/14
 * Time: 12:04
 */

namespace Closure;

class File
{
    public function deleteDirectory($path)
    {
        $deleteDirectory = null;

        $deleteDirectory = function($path) use (&$deleteDirectory) {
            $resource = opendir($path);
            while (($item = readdir($resource)) !== false) {
                if ($item !== "." && $item !== "..") {
                    if (is_dir($path . "/" . $item)) {
                        $deleteDirectory($path . "/" . $item);
                    } else {
                        unlink($path . "/" . $item);
                    }
                }
            }
            closedir($resource);
            rmdir($path);
        };

        $deleteDirectory($path);
    }
}