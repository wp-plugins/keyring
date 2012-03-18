<?php

class Keyring_Service_Delicious extends Keyring_Service_HTTP_Basic {
	const NAME  = 'delicious';
	const LABEL = 'delicious.com';
	
	function __construct( $details = array() ) {
		parent::__construct( $details );
		$this->set_endpoint( 'verify', 'https://api.del.icio.us/v1/posts/update' );
	}
}

add_action( 'keyring_load_services', array( 'Keyring_Service_Delicious', 'init' ) );