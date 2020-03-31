<?php 
// 
// @param path string
// Check current directory file to include
// 
if( !function_exists('includeRouteFiles') ) {
    function includeRouteFiles($path) {
        if( file_exists($path) ) {
            //get all files in directory
            //remove first 2 elements in files
            $files = scandir($path);
            array_splice($files, 0, 2);
            
            foreach($files as $file) {
                require $path.'\\'.$file;
            }
        }
    }
}

//
// @param url string
// check if the request url is active
// then return status
//
if( !function_exists('active_url') ) {
    function active_url($url) {
        return !Request::is($url) ?: 'mm-active';
    }
}

?>