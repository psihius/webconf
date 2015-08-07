<?php if(!defined('KIRBY')) exit ?>

title: Sponsors Pack
pages: false
files: false
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
	benefits:
		label: List of benefits
		type: textarea
	price:
		label: Price (in €)
		type: text
