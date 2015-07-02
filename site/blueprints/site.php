<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
	title:
		label: Title
		type:	text
	author:
		label: Author
		type:	text
	description:
		label: Description
		type:	textarea
	keywords:
		label: Keywords
		type:	tags
	copyright:
		label: Copyright
		type:	textarea
	conf_date:
		label: Dates of the conference
		type: text
	conf_place:
		label: Place of the conference
		type: text
