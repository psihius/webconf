<?php

function format_date($date = null) {
	$date = isset($date) ? $date : date('Y-m-d');
	list($y, $m, $d) = explode('-', $date);
	return sprintf(l::get('date-format'), (int) $d, l::get('month-'.$m), (int) $y);
}
