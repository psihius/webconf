<?php if(!defined('KIRBY')) exit ?>

title: Sponsor
pages: false
files: true
fields:
	title:
		label: Title
		type: text
	type:
		label: Type
		type: select
		options:
			bronze: bronze
			silver: silver
			gold: gold
			general: general
	text:
		label: Text
		type: textarea
	website:
		label: Website
		type: url
