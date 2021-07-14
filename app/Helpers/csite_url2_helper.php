<?php 


if(!function_exists('csite_url2')) {
	function csite_url2($param = '') {
		$site_url = site_url();
		$site_url = explode('/', $site_url);

		array_pop($site_url);

		$site_url = implode('/', $site_url) . '/';

		return $site_url . $param;
	}
	
}
