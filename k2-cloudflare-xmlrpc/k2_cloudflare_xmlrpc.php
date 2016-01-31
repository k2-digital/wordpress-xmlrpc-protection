<?php
	/*
		Plugin Name: XMLRPC Protection
		Plugin URI:  https://k2.digital
		Description: Block the xmlrpc attack suggested by CloudFlare
		Version:     1.0
		Author:      K2 Digital
		Author URI:  https://k2.digital
		License:     GNU General Public License v3.0
		License URI: http://www.gnu.org/licenses/gpl-3.0.txt
	*/
	defined( 'ABSPATH' ) or die;

	function mmx_remove_xmlrpc_methods( $methods ) {
	    unset( $methods['system.multicall'] );
	    // If you want to disable all methods to avoid the brute force attack to wordpress,
	    // Comment the above code, and remove comment of below codes
	    // unset($methods);
	    // $methods = array();
	    return $methods;
	}
	add_filter( 'xmlrpc_methods', 'mmx_remove_xmlrpc_methods');
