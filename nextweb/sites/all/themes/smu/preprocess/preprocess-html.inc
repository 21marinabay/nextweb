<?php

$path = request_path();

// set up Javascript array of arguments
// access with Drupal.settings.arg[];
drupal_add_js(array('arg' => arg()),'setting');

// $domain = domain_get_domain();
// $domain_id = $domain['domain_id'];
/* Domain IDs
   1 = SMU
   3 = Business
   4 = Economics
   5 = Accountancy
   6 = SIS
   7 = Law
   8 = SOCSC
   9 = Knowledge */

// Programmes compare URLs (should be same as the footer block)
$programmes = implode("\n", array (
  'programmes',
  'degree/*',
  'programme/*'
));


function myAddJs($filename, $weight = '101', $scope = 'footer') {
  $jspath = drupal_get_path('theme', 'smu') . '/js/';
  drupal_add_js($jspath . $filename . '.js', array('type' => 'file', 'scope' => $scope, 'weight' => $weight));
}

switch ($path) {
	case 'events':
	  myAddJs('events');
		//	drupal_add_js('sites/all/libraries/isotope/jquery.isotope.min.js', array('type' => 'file', 'scope' => 'header', 'weight' 
		myAddJs('filters');
	break;
	case (preg_match('#^news/.+$#', $path)?$path:!$path):
		myAddJs('filters');
	break;
}


// Site-wide
// myAddJs('shared', '100');
/*
if (drupal_is_front_page() && $domain_id == '1') {
  // SMU Homepage
  myAddJs('homepage');
} elseif ($path == 'news') {
  // News landing page
  myAddJs('news');
} elseif ($path == 'events') {
} elseif (drupal_match_path($path, $programmes)) {
  // Programmes compare
  myAddJs('programmes-compare');
}
*/

// check the path
// drupal_add_js('alert("Current path: ' . $path . '")', 'inline');

// get full url
// $url = url($_GET['q'], array('absolute' => true));

?>