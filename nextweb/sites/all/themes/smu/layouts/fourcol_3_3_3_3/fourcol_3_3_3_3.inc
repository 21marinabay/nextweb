<?php

function smu_fourcol_3_3_3_3_panels_layouts() {
  $items['fourcol_3_3_3_3'] = array(
    'title' => t('4 Column 3-3-3-3'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'fourcol_3_3_3_3.png',
    'theme' => 'fourcol_3_3_3_3',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'third' => t('Third'),
      'fourth' => t('Fourth'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}
