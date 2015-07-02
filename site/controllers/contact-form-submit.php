<?php

$fields = array(
	'_from' => 'email',
	'name' => '',
	'message' => ''
);
$form = uniform('contact-form', array(
    'required' => $fields,
    'actions'  => array(
        array(
			'_action'	=> 'email',
			'to'		=> 'info@webconf.lv',
			'sender'	=> 'webconf.lv@webconf.lv',
			'subject'	=> 'WebConf Contact Form'
        )
    )
));
if($form->successful()) {
	echo '{ "success" : "' . $page->success() . '" }';
} else {

	$keys = array_keys ($fields);

	foreach ( $keys as $key => $value) {
		if ( !$form->hasError($value) ) {
			unset($keys[$key]);
		}
	}
	$keys_count = count($keys) - 1;

	echo '{	"error": [';

	foreach ( $keys as $key => $value) {
		echo '"' . $value . '"' . ( ( $key < $keys_count ) ? ", " : "" );
	}

	echo '],';
	echo ' "message": "' . $page->fail() . '" ';
	echo '}';
}
