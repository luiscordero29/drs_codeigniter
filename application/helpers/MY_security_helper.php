<?php 
if (!function_exists('get_csrf_token_name')){
	function get_csrf_token_name() {
        $CI =& get_instance();
        return $CI->security->get_csrf_token_name();
    }
}
if (!function_exists('get_csrf_hash')){
	function get_csrf_hash() {
        $CI =& get_instance();
        return $CI->security->get_csrf_hash();
    }
}
?>