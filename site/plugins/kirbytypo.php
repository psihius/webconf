<?php

function kirbytypo($text){
    $options = array(
    	'Text.paragraphs'=>'off',
    	'Text.breakline' => 'off',
    	'Space.autospace_after' => 'off',
    	'OptAlign.oa_oquote' => 'off',
    	'OptAlign.oa_oquote_extra' => 'off',
    	'OptAlign.oa_obracket_coma' => 'off',
    );
    return EMTypograph::fast_apply(kirbytext($text), $options);
}

function typo($text){
    $options = array(
    	'Text.paragraphs'=>'off',
    	'Text.breakline' => 'off',
    	'Space.autospace_after' => 'off',
    	'OptAlign.oa_oquote' => 'off',
    	'OptAlign.oa_oquote_extra' => 'off',
    	'OptAlign.oa_obracket_coma' => 'off',
    );
    return EMTypograph::fast_apply($text, $options);
}
