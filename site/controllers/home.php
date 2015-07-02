<?php

return function($site, $pages, $page) {

	$form = uniform('contact-form', array(
        'required' => array(
			'_from' => 'email',
        	'name' => ''
		),
        'actions'  => array(
            array(
				'_action'	=> 'email',
				'to'		=> 'info@webconf.lv',
				'sender'	=> 'webconf.lv@webconf.lv',
				'subject'	=> 'WebConf Contact Form'
            )
        )
    ));
	
	return compact('form');
};
