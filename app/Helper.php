<?php 
// 
// @param path string
// Check current directory file to include
// 
if( !function_exists('includeRouteFiles') ) {
    function includeRouteFiles($path) {
        if(file_exists($path)) {
            foreach (File::allFiles($path) as $route_file) {
                require $route_file->getPathname();
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